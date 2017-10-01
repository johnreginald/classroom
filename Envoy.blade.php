@servers(['web' => 'root@johnthelinux.com -i ~/.ssh/blog'])

@task('deploy')
    cd /var/www/html/class
    git pull origin master
@endtask
