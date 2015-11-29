module.exports = {
    options: {
      backup_dir: "../backups/",
      rsync_args: ['--verbose', '--progress', '-rlpt', '--compress', '--omit-dir-times', '--delete'],
      exclusions: ['Gruntfile.js', '.git/', 'tmp/*', 'backups/', 'wp-config.php', 'composer.json', 'composer.lock', 'README.md', '.gitignore', 'package.json', 'node_modules']
    },
    local: {
      "title": "local",
      "database": "name",
      "user": "root",
      "pass": "root",
      "host": "localhost",
      "url": "localhost:8888/Week8_MeaganWP/wordpress/",
      // path is how finder would find it
      "path": "/Users/jessynd/Dropbox/websites/zooshare/site"
    },
    // the environment where i'm putting my files for staging
    staging: {
      "title": "staging",
      "database": "username_name",
      "user": "username_dbuser",
      "pass": "db-password",
      "host": "localhost",
      "url": "jessplease.com/zooshare/site",
      "path": "/home1/jessple1/public_html/zooshare",
      // you have to ask your host for this info
      "ssh_host": "jessple1@##.###.###.###"
    }

};