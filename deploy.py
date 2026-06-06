import os
import getpass
from ftplib import FTP, error_perm

# JOYKOREA FTP Deployment Automation Tool

DEFAULT_HOST = "cponavy2.cafe24.com"
DEFAULT_USER = "cponavy2"

print("==========================================")
echo_title = "  JOYKOREA FTP Deployment Automation Tool  "
print(echo_title)
print("==========================================\n")

host = input(f"Enter FTP Host (Default: {DEFAULT_HOST}): ").strip() or DEFAULT_HOST
user = input(f"Enter FTP User ID (Default: {DEFAULT_USER}): ").strip() or DEFAULT_USER
password = getpass.getpass("Enter FTP Password: ")

# 제외 목록 (.gitignore 기반)
EXCLUDE_LIST = [
    ".git", ".gitignore", "deploy.py", "backup.sh", ".DS_Store", "Thumbs.db", ".antigravitycli"
]

def should_exclude(path, base_dir):
    rel_path = os.path.relpath(path, base_dir)
    parts = rel_path.split(os.sep)
    for part in parts:
        if part in EXCLUDE_LIST or part.endswith('.backup') or part.endswith('.bak'):
            return True
    return False

def upload_directory(ftp, local_dir, remote_dir=""):
    print(f"Entering directory: {remote_dir or '/'}")
    if remote_dir:
        try:
            ftp.cwd(remote_dir)
        except error_perm:
            # 디렉터리가 없으면 생성 후 이동
            print(f"Creating remote directory: {remote_dir}")
            ftp.mkd(remote_dir)
            ftp.cwd(remote_dir)
            
    for item in os.listdir(local_dir):
        local_path = os.path.join(local_dir, item)
        if should_exclude(local_path, local_dir):
            continue
            
        if os.path.isfile(local_path):
            print(f"  Uploading file: {item} ...", end="")
            try:
                with open(local_path, "rb") as f:
                    ftp.storbinary(f"STOR {item}", f)
                print(" OK")
            except Exception as e:
                print(f" FAILED ({e})")
        elif os.path.isdir(local_path):
            # 재귀적으로 서브디렉터리 업로드
            upload_directory(ftp, local_path, item)
            # 상위 디렉터리로 복귀
            ftp.cwd("..")

try:
    print(f"\nConnecting to {host} ...")
    ftp = FTP()
    ftp.connect(host, 21, timeout=15)
    ftp.login(user, password)
    print("Successfully connected and authenticated.")
    
    # Cafe24 호스팅의 경우 보통 'html' 또는 'www'가 DocumentRoot이므로 경로 자동 점검
    remote_root = ""
    nlst = ftp.nlst()
    if "html" in nlst:
        remote_root = "html"
    elif "www" in nlst:
        remote_root = "www"
        
    if remote_root:
        print(f"Detected document root folder: {remote_root}")
        ftp.cwd(remote_root)
        
    print("\nStarting deployment...")
    upload_directory(ftp, os.getcwd())
    
    ftp.quit()
    print("\n==========================================")
    print("  SUCCESS: Deployment Completed!          ")
    print("==========================================")
except Exception as e:
    print(f"\nConnection failed: {e}")
    print("Please double check your credentials and network.")
