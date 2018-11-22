<template>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <h1>indexxxxx</h1>
    </main>
</template>

<script>
    export default {
        mounted() {
            this.$Progress.finish()
        },
        data(){
        	return {
        		sdsd:null
        	};
    	},
    	methods: {
    		// test () {
		    //   this.$Progress.start()
		    //   this.$http.jsonp('http://api.rottentomatoes.com/api/public/v1.0/lists/movies/in_theaters.json?apikey=7waqfqbprs7pajbz28mqf6vz')
		    //   .then((response) => {
		    //       this.$Progress.finish()
		    //   }, (response) => {
		    //       this.$Progress.fail()
		    //   })
		    // }
    	},
    	created(){
    		// this.test();
    		this.$Progress.start()
    		this.$router.beforeEach((to, from, next) => {
				//  does the page we want to go to have a meta.progress object
				if (to.meta.progress !== undefined) {
				let meta = to.meta.progress
				// parse meta tags
				this.$Progress.parseMeta(meta)
				}
				//  start the progress bar
				this.$Progress.start()
				//  continue to next page
				next()
			})
			//  hook the progress bar to finish after we've finished moving router-view
			this.$router.afterEach((to, from) => {
				//  finish the progress bar
				this.$Progress.finish()
			})
    	},
        
    }
</script>
