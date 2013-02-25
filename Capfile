
#
# Vagrant
#
task :vagrant, :hosts => "localhost" do

  set :user, 'vagrant'
  set :ssh_options, {port: 2222, keys: ['~/.vagrant.d/insecure_private_key']}

  run "ls -lp"
end



#
# Utils
#
task :confirm do
  set(:confirmed) do
    puts <<-WARN

    ========================================================================

       WARNING: You're about to perform actions on production server(s)
       Please confirm that all your intentions are kind and friendly

    ========================================================================

    WARN

    answer = Capistrano::CLI.ui.ask "  Are you sure you want to continue? (Y) "
    if answer == 'Y' then true else false end
  end

  unless fetch(:confirmed)
    puts "\nDeploy cancelled!"
    exit
  end
end

before 'production', :confirm
