module.exports = {
  devServer: {
    proxy: {
      // add your API endpoint here
      '/api': {
        target: 'https://api.infinitybrains.com/public/storage/creatives/',
        changeOrigin: true,
        pathRewrite: {
          '^/api': ''
        }
      }
    }
  }
}
