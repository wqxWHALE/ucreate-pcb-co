(function ($) {
  var defaults = {
    leng: 9,//总页数
    activeClass: 'page-active' ,//active类
    firstPage: '首页',
    lastPage: '末页',
    prv: '«',
    next: '»',
  };
  //扩展
  $.fn.extend({
    page: function (options) {
      var opts = $.extend(defaults, options);
      return this.each(function () {
        var obj = $(this);
        var str1 = '';
        var str = '';
        var l = opts.leng;
        if (l > 1&&l < 4) {
          str1 = '<li><a href="javascript:" class="'+ opts.activeClass +'">1</a></li>';
          for (i = 2; i < l + 1; i++) {
            str += '<li><a href="javascript:">' + i + '</a></li>';
          }
        }else if(l > 3){
          str1 = '<li><a href="javascript:" class="'+ opts.activeClass +'">1</a></li>';
          for (i = 2; i < 4; i++) {
            str += '<li><a href="javascript:">' + i + '</a></li>';
          }
          //str += '<li><a href="javascript:">...</a></li>'
        } else {
          str1 = '<li><a href="javascript:" class="'+ opts.activeClass +'">1</a></li>';
        }
        obj.html('<div class="prv" style="float:left">' + opts.prv + '</div><div class="first"  style="float:left">' + opts.firstPage + '</div><ul class="pagingUl"  style="float:left">' + str1 + str + '</ul><div class="last"  style="float:left">' + opts.lastPage + '</div><div class="next"  style="float:left">' + opts.next + '</div>');
        
        obj.on('click', '.next', function () {
          var pageshow = parseInt($('.' + opts.activeClass).html());
           if(pageshow == l) {
          }else if(pageshow > l-2&&pageshow < l){
            $('.' + opts.activeClass).removeClass(opts.activeClass).parent().next().find('a').addClass(opts.activeClass);
          }else if(pageshow > 0&&pageshow < 2){
            $('.' + opts.activeClass).removeClass(opts.activeClass).parent().next().find('a').addClass(opts.activeClass);
          }else {
            $('.' + opts.activeClass).removeClass(opts.activeClass).parent().next().find('a').addClass(opts.activeClass);
            fpageShow();
          }
        });
        obj.on('click', '.prv', function () {
          var pageshow = parseInt($('.' + opts.activeClass).html());
          if (pageshow == 1) {
          }else if(pageshow > l-1&&pageshow < l+1){
            $('.' + opts.activeClass).removeClass(opts.activeClass).parent().prev().find('a').addClass(opts.activeClass);
          }else if(pageshow > 1&&pageshow < 3){
            $('.' + opts.activeClass).removeClass(opts.activeClass).parent().prev().find('a').addClass(opts.activeClass);
          }else {
            $('.' + opts.activeClass).removeClass(opts.activeClass).parent().prev().find('a').addClass(opts.activeClass);
            fpageShow();
          }
        });

        obj.on('click', '.first', function(){
          var pageshow = 1;
          $('.' + opts.activeClass).removeClass(opts.activeClass).parent().prev().find('a').addClass(opts.activeClass);
          fpagePrv(0);
        })
        obj.on('click', '.last', function(){
          var pageshow = l;
          if(l>3){
            $('.' + opts.activeClass).removeClass(opts.activeClass).parent().prev().find('a').addClass(opts.activeClass);
            fpageNext(2);
          }else{
            $('.' + opts.activeClass).removeClass(opts.activeClass).parent().prev().find('a').addClass(opts.activeClass);
            fpageNext(l-1);
          }
        })

        obj.on('click', 'li', function(){
          var $this = $(this);
          var pageshow = $this.find('a').html();
          if(l>3){
            if(pageshow > l-2&&pageshow < l+1){
              $('.' + opts.activeClass).removeClass(opts.activeClass);
              $this.find('a').addClass(opts.activeClass);
              fpageNext(2-(l-pageshow));
            }else if(pageshow > 0&&pageshow < 2){
              $('.' + opts.activeClass).removeClass(opts.activeClass);
              $this.find('a').addClass(opts.activeClass);
              fpagePrv(pageshow-1);
            }else{
              $('.' + opts.activeClass).removeClass(opts.activeClass);
              $this.find('a').addClass(opts.activeClass);
              fpageShow();
            }
          }else{
            $('.' + opts.activeClass).removeClass(opts.activeClass);
            $this.find('a').addClass(opts.activeClass);
          }
        })

        function fpageShow(){
          var pageshow = parseInt($('.' + opts.activeClass).html());
          var pageStart = pageshow - 1;
          var pageEnd = pageshow + 2;
          var str1 = '';
          for(i=0;i<3;i++){
            str1 += '<li><a href="javascript:" class="">' + (pageStart+i) + '</a></li>'
          }
          obj.find('ul').html(str1);
          obj.find('ul li').eq(1).find('a').addClass(opts.activeClass);
        }

        function fpagePrv(prv){
          var str1 = '';
          if(l>2){
            for(i=0;i<3;i++){
              str1 += '<li><a href="javascript:" class="">' + (i+1) + '</a></li>'
            }
          }else{
            for(i=0;i<l;i++){
              str1 += '<li><a href="javascript:" class="">' + (i+1) + '</a></li>'
            }
          }
          obj.find('ul').html(str1);
          obj.find('ul li').eq(prv).find('a').addClass(opts.activeClass);
        }

        function fpageNext(next){
          var str1 = '';
          if(l>2){
            for(i=l-2;i<l+1;i++){
              str1 += '<li><a href="javascript:" class="">' + i + '</a></li>'
            }
           obj.find('ul').html(str1);
           obj.find('ul li').eq(next).find('a').addClass(opts.activeClass);
          }else{
            for(i=0;i<l;i++){
              str1 += '<li><a href="javascript:" class="">' + (i+1) + '</a></li>'
            }
           obj.find('ul').html(str1);
           obj.find('ul li').eq(next).find('a').addClass(opts.activeClass);
          }
        }
      });
    }
  })
})(jQuery);