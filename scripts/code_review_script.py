from github import Github

def create_review_issue(github_token, repository, branch, findings):
    """
    Create a GitHub Issue with code review findings.

    Args:
        github_token (str): GitHub access token.
        repository (str): The repository in "owner/repo" format.
        branch (str): The branch being reviewed.
        findings (list): A list of review comments.
    """
    # Authenticate with GitHub
    g = Github(github_token)
    
    # Access the repository
    repo = g.get_repo(repository)
    
    # Format the issue title and body
    issue_title = f"Code Review Findings for Branch: {branch}"
    issue_body = "### Issues found during code review:\n"
    for finding in findings:
        issue_body += f"- {finding}\n"

    # Create the issue
    issue = repo.create_issue(
        title=issue_title,
        body=issue_body
    )
    
    print(f"Issue created: {issue.html_url}")


if __name__ == "__main__":
    import os
    
    # Retrieve environment variables
    GITHUB_TOKEN = os.getenv("GITHUB_TOKEN")
    REPOSITORY = os.getenv("REPOSITORY")  # e.g., "your-username/your-repository-name"
    BRANCH = os.getenv("BRANCH")          # e.g., "main"
    
    # Sample review findings
    REVIEW_FINDINGS = [
        "Line 42: Variable name is not descriptive enough.",
        "Line 85: Consider using a more efficient algorithm here.",
        "Line 120: Magic number used; replace with a named constant."
    ]
    
    # Create a GitHub Issue with the review findings
    create_review_issue(GITHUB_TOKEN, REPOSITORY, BRANCH, REVIEW_FINDINGS)
