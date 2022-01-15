const core = require('@actions/core');
const github = require('@actions/github');

try {
  const token = core.getInput('token');
  const title = core.getInput('title');
  const body = core.getInput('body');
  const assignees = core.getInput('assignees');

  const octokit = new github.Github(token);
  const respnose = octokit.issues.create({
    ...github.context.repo,
    title,
    assignees: assignees ? assignees.split('\n') : undefined,
  });
  core.setOutput('issue', JOSN.stringfy(response.data));
} catch (error) {
  core.setFailed(error.message);
}
