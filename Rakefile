task :default => :build

desc 'Build site with Jekyll'
task :build do
  puts "You may wish to use the --watch/-w command-line option instead."
  sh 'jekyll build'
end

desc 'Start server'
task :server => :build do
  sh 'jekyll serve'
end

desc 'Build and deploy'
task :deploy => :build do
  puts "Publishing site"
  sh %Q{
    s3cmd sync _site/ s3://toddeichel.com/ \
      --cf-invalidate \
      --delete-removed \
      --acl-public \
      --verbose \
  }
      # --reduced-redundancy \
      # --dry-run
end
