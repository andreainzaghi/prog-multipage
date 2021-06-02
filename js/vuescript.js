new Vue({
  el: '#app',
  data:{
    title:'',
    images: []
  },

      mounted: function() {

      axios.get( 'http://localhost/prog-multipage/partialapi/api.php')
      .then((result)=>{
          this.images = result.data;
            console.log(this.images);
          // console.log(result.data.hits);
        });

    },
  })
