set :application, 'bht.nois3.net'
set :repo_url, 'git@git.nois3.it:nois3/bht.git'

# Branch options
# Prompts for the branch name (defaults to current branch)
#ask :branch, proc { `git rev-parse --abbrev-ref HEAD`.chomp }

# Sets branch to current one
#set :branch, proc { `git rev-parse --abbrev-ref HEAD`.chomp }

# Hardcodes branch to always be master
# This could be overridden in a stage config file
set :branch, :master

set :deploy_to, "/home/www/#{fetch(:application)}"

set :log_level, :debug
set :composer_install_flags, '--no-dev --no-interaction --optimize-autoloader'
set :linked_files, fetch(:linked_files, []).push('.env').push('web/.htaccess');
set :linked_dirs, fetch(:linked_dirs, []).push('web/app/uploads');

namespace :deploy do
  desc 'Restart application'
  task :restart do
    on roles(:app), in: :sequence, wait: 5 do
      # Your restart mechanism here, for example:
      # execute :service, :nginx, :reload
      # execute "wp help super-cache status"
    end
  end
end

namespace :deploy do
  desc 'Dump database'
  task :backup do
    on roles(:db), in: :sequence, wait: 5 do
      # Your restart mechanism here, for example:
      # execute :service, :nginx, :reload
      # execute "wp help super-cache status"
      execute "wp help"
    end
  end
end


# The above restart task is not run by default
# Uncomment the following line to run it on deploys if needed
# after 'deploy:publishing', 'deploy:restart'
