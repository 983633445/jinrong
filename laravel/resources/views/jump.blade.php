  <script src="{{ URL::asset('js/jquery.js') }}"></script>
  <script type="text/javascript">
        $(function(){
            var url = "{{$url}}"
            var loginTime = parseInt($('.loginTime').text());
            var time = setInterval(function(){
                loginTime = loginTime-1;
                $('.loginTime').text(loginTime);
                if(loginTime==0){
                    clearInterval(time);
                    window.location.href=url;
                }
            },1000);
        })
    </script>
 <div id="applyFor" style="text-align: center; width: 500px; margin: 100px auto;">{{$message}},将在<span class="loginTime" style="color: red">{{$jumpTime}}</span>秒后<a href="{{$url}}" style="color: red">跳转</a></div>