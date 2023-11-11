module.exports = {
  devServer: {
    proxy: {
      // add your API endpoint here
      "/api": {
        target: "https://uatinfinitybackend.infinitybrains.com/public/storage/creatives/",
        changeOrigin: true,
        pathRewrite: {
          "^/api": "",
        },
      },
    },
  },
};
