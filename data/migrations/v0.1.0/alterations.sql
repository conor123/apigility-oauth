ALTER TABLE oauth_access_tokens CHANGE access_token access_token VARCHAR(40) NOT NULL, CHANGE expires expires DATETIME NOT NULL;
ALTER TABLE oauth_authorization_codes CHANGE authorization_code authorization_code VARCHAR(40) NOT NULL, CHANGE expires expires DATETIME NOT NULL;
ALTER TABLE oauth_clients CHANGE client_id client_id VARCHAR(80) NOT NULL;
ALTER TABLE oauth_jwt CHANGE client_id client_id VARCHAR(80) NOT NULL;
ALTER TABLE oauth_refresh_tokens CHANGE refresh_token refresh_token VARCHAR(40) NOT NULL, CHANGE expires expires DATETIME NOT NULL;
ALTER TABLE oauth_scopes CHANGE type type VARCHAR(255) NOT NULL;
ALTER TABLE oauth_users CHANGE username username VARCHAR(255) NOT NULL;
