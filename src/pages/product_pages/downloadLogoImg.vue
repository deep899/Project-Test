<template>
  <div>
    <button @click="createZipFile">Create Zip File</button>
  </div>
</template>

<script>
import JSZip from 'jszip'
import { saveAs } from 'file-saver'

export default {
  methods: {
    createZipFile() {
      const zip = new JSZip()
      const urls = ["https://uatapi.infinitybrains.com/public/storage/creatives/kUbcCOm2znABQjEs9qxKrFhs0wcS2q.jpg"+"?not-from-cache-please", "https://uatapi.infinitybrains.com/public/storage/creatives/kUbcCOm2znABQjEs9qxKrFhs0wcS2q.jpg"+"?not-from-cache-please","https://uatapi.infinitybrains.com/public/storage/creatives/kUbcCOm2znABQjEs9qxKrFhs0wcS2q.jpg"+"?not-from-cache-please"]
      const promises = []

      // Add each image to the zip archive
      urls.forEach((url, index) => {
        const promise = fetch(url).then(response => {
          if (response.ok) {
            return response.blob().then(blob => {
              zip.file(`image${index + 1}.jpg`, blob)
            })
          }
          throw new Error(`Failed to fetch image ${index + 1}: ${response.status} ${response.statusText}`)
        })
        promises.push(promise)
      })

      // Save the zip archive to the user's computer
      Promise.all(promises).then(() => {
        zip.generateAsync({ type: 'blob' }).then(blob => {
          saveAs(blob, 'images.zip')
        })
      })
    }
  },
  mounted(){

      // forloop passing all url geted 
      



  }
}
</script>
