<template>
  
	   
  <div>
      <admin_header></admin_header>
	    <admin_sidebar></admin_sidebar>

        <div class="content-wrapper">
          <section class="content">
              <div class="container-fluid">
              <router-view></router-view>
              </div>
          </section>
        </div>
        
      <admin_footer></admin_footer>
  </div>

</template>
 
<script>
    export default {}
</script>