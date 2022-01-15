const core = require('@actions/core');
const github = require('@actions/github');
const { Octokit } = require('@octokit/rest');

const run = async () => {
  try {
    const token = core.getInput('token');
    const title = core.getInput('title');
    const body = core.getInput('body');
    const assignees = core.getInput('assignees');

    const octokit = new Octokit({
      auth: token,
    });

    const respnose = await octokit.rest.issues.create({
      ...github.context.repo,
      title,
      body,
      assignees: assignees ? assignees.split('\n') : undefined,
    });
    core.setOutput('issue', JOSN.stringfy(response.data));
  } catch (error) {
    core.setFailed(error.message);
  }
};

run();
