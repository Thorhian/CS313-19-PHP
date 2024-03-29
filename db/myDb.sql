CREATE SCHEMA renderLab;

ALTER USER current_user SET search_path TO renderLab, public;

CREATE TABLE renderLab.users
(
	user_id SERIAL PRIMARY KEY,
	username VARCHAR(16) NOT NULL,
	email VARCHAR(64) NOT NULL,
	prof_pic VARCHAR(128) NOT NULL,
	password VARCHAR(256) NOT NULL
);

CREATE TABLE renderLab.projects
(
	project_id SERIAL PRIMARY KEY,
	root_loc VARCHAR(128) NOT NULL,
	description TEXT,
	logo_loc VARCHAR(128) NOT NULL,
	owner SERIAL REFERENCES users(user_id) NOT NULL
);

CREATE TABLE renderLab.user_permissions
(
	user_id SERIAL REFERENCES users(user_id) NOT NULL,
	project_id SERIAL REFERENCES projects(project_id) NOT NULL,
	is_admin BOOLEAN NOT NULL
);

CREATE TYPE renderLab.job_status AS ENUM ('RENDERING', 'PAUSED', 'STOPPED');

CREATE TABLE renderLab.jobs
(
	project_id SERIAL REFERENCES projects(project_id) NOT NULL,
	name VARCHAR(128) NOT NULL,
	path_to_blend VARCHAR(256) NOT NULL,
	start_frame INT NOT NULL,
	end_frame INT NOT NULL,
	current_frame INT NOT NULL,
	current_status job_status NOT NULL
);
