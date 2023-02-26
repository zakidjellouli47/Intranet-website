<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="wrapper">
  <div class="search-box">
     <input type="text" placeholder="Search" class="input">
     <div class="btn">
       <i class="fa fa-search" aria-hidden="true"></i>
     </div>
  </div>
</div>










<!-- By Coding Market -->
<div class="youtube">
  <a href="https://www.youtube.com/channel/UCtVM2RthR4aC6o7dzySmExA" target="_blank">by coding market</a>
</div>




<style>

 {
  margin: 0;
  padding: 0;
  user-select: none;
}

body {
  background: #29313a;
}

.wrapper {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.search-box {
  width: 450px;
  height: 100px;
  position: relative;
}

.input {
  position: absolute;
  top: 20px;
  right: 50px;
  box-sizing: border-box;
  width: 0px;
  height: 63px;
  padding: 0 20px;
  outline: none;
  font-size: 18px;
  border-radius: 50px;
  color: #29313a;
  border: 3px solid #62d474;
  transition: all 0.8s ease;
}

::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  color: #62d474;
}
::-moz-placeholder {
  /* Firefox 19+ */
  color: #62d474;
}
:-ms-input-placeholder {
  /* IE 10+ */
  color: #62d474;
}
:-moz-placeholder {
  /* Firefox 18- */
  color: #62d474;
}

.btn {
  position: absolute;
  width: 80px;
  height: 80px;
  background: #62d474;
  border-radius: 50%;
  right: 45px;
  top: 10px;
  cursor: pointer;
  text-align: center;
  line-height: 80px;
  font-size: 20px;
  color: #fff;
  transition: all 0.8s ease;
}

.input.active {
  width: 350px;
  right: 100px;
}

.btn.animate {
  transform: rotate(-360deg);
  right: 100px;
}


















/* youtube link */
.youtube{
  position: fixed;
  bottom: 10px;
  right: 10px;
  width: 160px;
  text-align: center;
  padding: 15px 10px;
  background: #bb0000;
  border-radius: 5px;
}

.youtube a{
  text-decoration: none;
  color: #fff;
  text-transform: capitalize;
  letter-spacing: 1px;
}
</style>




<script>
$(".btn").click(function(){
  $(".input").toggleClass("active").focus;
  $(this).toggleClass("animate");
  $(".input").val("");
});
</script>