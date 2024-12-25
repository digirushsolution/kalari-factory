<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('public/asset/css/style.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
       
        <title>Kalari Factory</title>
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
        <link rel="stylesheet" type="text/css"href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
        <script src="{{ asset('vendor/flasher/flasher.min.js') }}"></script>

        <meta name="robots" content="noindex, nofollow" />
     
    </head>
    <body>
    @include('include.header')

        @yield('content')

    @include('include.footer')

        
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <script>

            
        // JavaScript for responsive menu toggle
        function toggleMenu() {
          const menus = document.querySelectorAll('.menu');
          menus.forEach(menu => menu.classList.toggle('open'));
        }
      </script>
      <script>
        $(document).ready(function () {
            $('.slick-slider-banner').slick({
                fade: true,
                speed: 1000,
                autoplay: true,
                autoplaySpeed: 7000,
                arrows: false,
                dots: true,
            });
        });
    </script>
    <script>
        document.querySelectorAll('.flip-container').forEach(container => {
    container.addEventListener('click', () => {
        const flipper = container.querySelector('.flipper');
        flipper.style.transform = flipper.style.transform === 'rotateY(180deg)' ? '' : 'rotateY(180deg)';
    });
});

    </script>
     <script>
        $(document).ready(function () {
            $('.under_testimonial_content').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 4000,
                autoplay: true,
                autoplaySpeed: 7000,
                arrows: false,
                dots: true,
                
            });
            
        });
    </script>
         <script>
            $(document).ready(function () {
                $('.latest_blog_sec_un').slick({
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    speed: 4000,
                    autoplay: true,
                    autoplaySpeed: 7000,
                    arrows: false,
                    dots: true,
                    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
                });
             
});
         
        </script>
    <script>
        let count = document.querySelectorAll(".count")
let arr = Array.from(count)



arr.map(function(item){
  let startnumber = 0

  function counterup(){
  startnumber++
  item.innerHTML= startnumber
   
  if(startnumber == item.dataset.number){
      clearInterval(stop)
  }
}

let stop =setInterval(function(){
  counterup()
},50)

})
    </script>
    <script>
        function opennav() {
    const nav = document.querySelector('.mobile_view');
    const menuIcon = document.querySelector('#menubtn-icon');

    if (nav.classList.contains('open')) {
        nav.classList.remove('open');
        menuIcon.classList.remove('cross');
    } else {
        nav.classList.add('open');
        menuIcon.classList.add('cross');
    }
}

document.querySelectorAll('#dropdown > a').forEach(function (dropdownToggle) {
    dropdownToggle.addEventListener('click', function (event) {
        const dropdownMenu = this.nextElementSibling;
        const isVisible = dropdownMenu.style.display === 'block';

        document.querySelectorAll('.dropdown-menu').forEach(function (menu) {
            menu.style.display = 'none';
        });

        dropdownMenu.style.display = isVisible ? 'none' : 'block';

        event.preventDefault();
    });
});
    </script>

<script>
    function openVideoPopup(videoUrl) {
const popup = document.getElementById('video-popup');
const iframe = document.getElementById('video-frame');
iframe.src = videoUrl;
popup.style.display = 'block';
}

function closeVideoPopup() {
const popup = document.getElementById('video-popup');
const iframe = document.getElementById('video-frame');
iframe.src = '';
popup.style.display = 'none';
}
  </script>
  <script>
      $(document).ready(function () {
          $('.video_slide_main').slick({
              infinite: true,
              slidesToShow: 3,
              slidesToScroll: 3,
              speed: 4000,
              autoplay: true,
              autoplaySpeed: 7000,
              arrows: false,
              dots: true,
              responsive: [
{
breakpoint: 1024,
settings: {
  slidesToShow: 3,
  slidesToScroll: 3,
  infinite: true,
  dots: true
}
},
{
breakpoint: 600,
settings: {
  slidesToShow: 2,
  slidesToScroll: 2
}
},
{
breakpoint: 480,
settings: {
  slidesToShow: 1,
  slidesToScroll: 1
}
}
]
          });
       
});



$(document).ready(function () {
$('.coffee-post-item').on('mouseenter', function () {
$(this).addClass('flipped');
});

$('.coffee-post-item').on('mouseleave', function () {
$(this).removeClass('flipped');
});
});

  </script>
  
  </body>
</html>