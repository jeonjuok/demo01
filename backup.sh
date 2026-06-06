#!/bin/bash

# JOYKOREA GitHub Backup Automation Tool

echo "=========================================="
echo "  JOYKOREA GitHub Backup Automation Tool  "
echo "=========================================="
echo ""

# 1. 원격 주소 존재 여부 확인
if git remote | grep -q "origin"; then
    echo "Existing remote 'origin' found."
    git remote -v
    echo ""
    read -p "Do you want to overwrite the existing remote? (y/n): " overwrite
    if [ "$overwrite" = "y" ] || [ "$overwrite" = "Y" ]; then
        git remote remove origin
        echo "Removed existing remote."
    else
        echo "Pushing latest changes to existing remote..."
        git push -u origin main
        exit 0
    fi
fi

# 2. 새로운 원격 저장소 URL 입력 받기
echo "Please enter your GitHub Repository URL."
echo "Example: https://github.com/your-username/your-repo-name.git"
read -p "Repository URL: " repo_url

if [ -z "$repo_url" ]; then
    echo "Error: Repository URL cannot be empty."
    exit 1
fi

# 3. 원격지 등록 및 푸시
echo "Adding remote 'origin' for: $repo_url"
git remote add origin "$repo_url"

echo "Setting branch to main..."
git branch -M main

echo "Pushing code to GitHub..."
if git push -u origin main; then
    echo ""
    echo "=========================================="
    echo "  SUCCESS: Project successfully backed up! "
    echo "=========================================="
else
    echo ""
    echo "=========================================="
    echo "  ERROR: Push failed. Check your connection/credentials."
    echo "  You can try manually: git push -u origin main"
    echo "=========================================="
fi
