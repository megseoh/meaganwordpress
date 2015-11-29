module.exports = {
  dist: {
    options: {
      // cssmin will minify later
      style: 'expanded'
    },
    files: {
    	// 'the one you want it to compile into' : 'the one that's being compiled'
      'css/build/global.css': 'css/global.scss'
    }
  }
}