# Form Configs

# Free estimate

[text* username placeholder "Your name"]
[email* email placeholder "Your e-mail"]
[tel* tel placeholder "Phone Number"]
[select* location first_as_label "Location" "Charlotte Metropolitan Area"]
[select* isthisfor first_as_label "Is this for?" "Home" "Business" "Office"]

[select* residencetype first_as_label "Type of Residence" "Ranch" "Two Story" "Three Story" "Condo/towhome" "Luxury home"]
[select* squarefeet first_as_label "Approximate square feet?" "Less than 1000" "1000-1500" "1500-2000" "2000-2500" "2500-3000" "3000-3500" "3500+"]
[select* bedrooms first_as_label "Number of Bedrooms" "1" "2" "3" "4" "5+"]
[select* bathrooms first_as_label "Number of Bathrooms" "1" "2" "3" "4" "5"]
[select* cleaningtype first_as_label "Cleaning type" "Regular Cleaning" "Deep Cleaning" "Move-in/out" "Carpet cleaning"]

[select* cleaningfrequency first_as_label "Cleaning frequency" "Weekly" "Bi-weekly" "Every 3 week" "Monthly" "Sometimes"]
[textarea instructions placeholder "Message / Instructions"]

<p>Address: 6632 Fishers Farm Ln, Charlotte, NC 28277</p>
<div>
<strong>Hours of Operation</strong>
<ul>
<li>Mon 8:00 am - 5:00 pm</li>
<li>Tue 8:00 am - 5:00 pm</li>
<li>Wed 8:00 am - 5:00 pm</li>
<li>Thur 8:00 am - 5:00 pm</li>
<li>Fri 8:00 am - 5:00 pm</li>
</ul>
</div>

[submit "Send"]

# Free estimate Carpet

[text* username placeholder "Your name"]
[email* email placeholder "Your e-mail"]
[tel* tel placeholder "Phone Number"]
[select* location first_as_label "Location" "Charlotte Metropolitan Area"]
[select* isthisfor first_as_label "Is this for?" "Home" "Business" "Office"]

<h3>Carpet Cleaning [checkbox carpetcleaning use_label_element class:cleaningType exclusive "Yes"]</h3>
<div class="form-content-wrapper">  
  [select carpetprotect first_as_label "Protect?" "Yes" "No"]
  [select carpetdeodorize first_as_label "Deodorize?" "Yes" "No"]
  [select carpetroom first_as_label "Number of Rooms" "1" "2" "3" "4" "5+"]
  [select carpethallways first_as_label "Number of Hallways" "1" "2" "3" "4" "5+"]
  [number carpetstairs placeholder "How many steps?"]
</div>

<h3>Upholstery Cleaning [checkbox upholsterycleaning use_label_element class:cleaningType exclusive "Yes"]</h3>
<div class="form-content-wrapper">  
  [select upholsteryprotect first_as_label "Protect?" "Yes" "No"]
  [select upholsterydeodorize first_as_label "Deodorize?" "Yes" "No"]
  [select upholsterysofaseats first_as_label "Number of Sofa Seats" "1" "2" "3" "4" "5+"]
  [select upholsterysectionalseats first_as_label "Number of Sectional Seats" "1" "2" "3" "4" "5+"]
  [select upholsteryloveseats first_as_label "Number of Love Seats" "1" "2" "3" "4" "5+"]
  [select upholsterychair first_as_label "Number of Chairs" "1" "2" "3" "4" "5+"]
  [select upholsteryottoman first_as_label "Number of Ottoman" "1" "2" "3" "4" "5+"]
  [select upholsterydiningchair first_as_label "Number of Dinining Room chair" "1" "2" "3" "4" "5+"]
</div>

<h3>Car Cleaning [checkbox carcleaning use_label_element class:cleaningType exclusive "Yes"]</h3>
<div class="form-content-wrapper">  
  [select carfloor first_as_label "Floor?" "Yes" "No"]
  [select carseats first_as_label "Seats?" "Yes" "No"]
  [select cartype first_as_label "Car type" "Regular" "SUV" "Van"]
</div>

<h3>Area Rug [checkbox arearug use_label_element class:cleaningType exclusive "Yes"]</h3>
<div class="form-content-wrapper">  
  [select rugprotect first_as_label "Protect?" "Yes" "No"]
  [select rugdeodorize first_as_label "Deodorize?" "Yes" "No"]
  [text ruglengthwidth placeholder "Length/ Width _ x _"]
</div>

[select* cleaningfrequency first_as_label "Cleaning frequency" "Weekly" "Bi-weekly" "Every 3 week" "Monthly" "Sometimes"]
[textarea instructions placeholder "Message / Instructions"]

<p>Address: 6632 Fishers Farm Ln, Charlotte, NC 28277</p>
<div>
<strong>Hours of Operation</strong>
<ul>
<li>Mon 8:00 am - 5:00 pm</li>
<li>Tue 8:00 am - 5:00 pm</li>
<li>Wed 8:00 am - 5:00 pm</li>
<li>Thur 8:00 am - 5:00 pm</li>
<li>Fri 8:00 am - 5:00 pm</li>
</ul>
</div>

[submit "Send"]

# Free estimate - OLD

[text* username placeholder "Your name"]
[email* email placeholder "Your e-mail"]
[tel* tel placeholder "Phone Number"]
[select* location first_as_label "Location" "Charlotte Metropolitan Area"]
[select* isthisfor first_as_label "Is this for?" "Home" "Business" "Office"]

<h3>House Cleaning [checkbox housecleaning use_label_element class:cleaningType exclusive "Yes"]</h3>
<div class="form-content-wrapper">  
  [select residencetype first_as_label "Type of Residence" "Ranch" "Two Story" "Three Story" "Condo/towhome" "Luxury 
  home"]
  [select squarefeet first_as_label "Approximate square feet?" "Less than 1000" "1000-1500" "1500-2000" "2000-2500" 
  "2500-3000" "3000-3500" "3500+"]
  [select bedrooms first_as_label "Number of Bedrooms" "1" "2" "3" "4" "5+"]
  [select bathrooms first_as_label "Number of Bathrooms" "1" "2" "3" "4" "5"]
  [select cleaningtype first_as_label "Cleaning type" "Regular Cleaning" "Deep Cleaning" "Move-in/out" "Carpet 
  cleaning"]
</div>

<h3>Carpet Cleaning [checkbox carpetcleaning use_label_element class:cleaningType exclusive "Yes"]</h3>
<div class="form-content-wrapper">  
  [select carpetprotect first_as_label "Protect?" "Yes" "No"]
  [select carpetdeodorize first_as_label "Deodorize?" "Yes" "No"]
  [select carpetroom first_as_label "Number of Rooms" "1" "2" "3" "4" "5+"]
  [select carpethallways first_as_label "Number of Hallways" "1" "2" "3" "4" "5+"]
  [number carpetstairs placeholder "How many steps?"]
</div>

<h3>Upholstery Cleaning [checkbox upholsterycleaning use_label_element class:cleaningType exclusive "Yes"]</h3>
<div class="form-content-wrapper">  
  [select upholsteryprotect first_as_label "Protect?" "Yes" "No"]
  [select upholsterydeodorize first_as_label "Deodorize?" "Yes" "No"]
  [select upholsterysofaseats first_as_label "Number of Sofa Seats" "1" "2" "3" "4" "5+"]
  [select upholsterysectionalseats first_as_label "Number of Sectional Seats" "1" "2" "3" "4" "5+"]
  [select upholsteryloveseats first_as_label "Number of Love Seats" "1" "2" "3" "4" "5+"]
  [select upholsterychair first_as_label "Number of Chairs" "1" "2" "3" "4" "5+"]
  [select upholsteryottoman first_as_label "Number of Ottoman" "1" "2" "3" "4" "5+"]
  [select upholsterydiningchair first_as_label "Number of Dinining Room chair" "1" "2" "3" "4" "5+"]
</div>

<h3>Car Cleaning [checkbox carcleaning use_label_element class:cleaningType exclusive "Yes"]</h3>
<div class="form-content-wrapper">  
  [select carfloor first_as_label "Floor?" "Yes" "No"]
  [select carseats first_as_label "Seats?" "Yes" "No"]
  [select cartype first_as_label "Car type" "Regular" "SUV" "Van"]
</div>

<h3>Area Rug [checkbox arearug use_label_element class:cleaningType exclusive "Yes"]</h3>
<div class="form-content-wrapper">  
  [select rugprotect first_as_label "Protect?" "Yes" "No"]
  [select rugdeodorize first_as_label "Deodorize?" "Yes" "No"]
  [text ruglengthwidth placeholder "Length/ Width _ x _"]
</div>

[select* cleaningfrequency first_as_label "Cleaning frequency" "Weekly" "Bi-weekly" "Every 3 week" "Monthly" "Sometimes"]
[textarea instructions placeholder "Message / Instructions"]

<p>Address: 6632 Fishers Farm Ln, Charlotte, NC 28277</p>
<div>
<strong>Hours of Operation</strong>
<ul>
<li>Mon 8:00 am - 5:00 pm</li>
<li>Tue 8:00 am - 5:00 pm</li>
<li>Wed 8:00 am - 5:00 pm</li>
<li>Thur 8:00 am - 5:00 pm</li>
<li>Fri 8:00 am - 5:00 pm</li>
</ul>
</div>

[submit "Send"]

# Form Messages

# Free estimate Message

<div style="width:800px; padding:40px 0; background-color:#eee;">
	<div style="width:560px; padding:20px; border-radius:10px; background-color:#FFF; text-align:center; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; margin:0 0 0 100px">
    <h2>Contact from website</h2>
  
    <div style="border-top:1px solid #eee; border-bottom:1px solid #eee; padding:20px 0; margin:10px 0; text-align:left">    
      <b>Name:</b> [username]
      <b>E-mail:</b> [email]
      <b>Phone Number:</b> [tel]
      <b>Location:</b> [location]
      <b>Is this for:</b> [isthisfor]
      <br>
      <br>
      <b>House Cleaning: </b> [housecleaning]
      <br>
      <b>Type of Residence:</b> [residencetype]
      <b>Approximate square feet?:</b> [squarefeet]
      <b>Number of Bedrooms:</b> [bedrooms]
      <b>Number of Bathrooms:</b> [bathrooms]
      <b>Cleaning type:</b> [cleaningtype]
      <br>
      <br>
      <b>Cleaning frequency:</b> [cleaningfrequency]
      <br>
      <b>Message / Instructions:</b><br>
      [instructions]
    </div>
  </div>
</div>

# Free estimate Carpet Message

<div style="width:800px; padding:40px 0; background-color:#eee;">
	<div style="width:560px; padding:20px; border-radius:10px; background-color:#FFF; text-align:center; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; margin:0 0 0 100px">
    <h2>Contact from website</h2>
  
    <div style="border-top:1px solid #eee; border-bottom:1px solid #eee; padding:20px 0; margin:10px 0; text-align:left">    
      <b>Name:</b> [username]
      <b>E-mail:</b> [email]
      <b>Phone Number:</b> [tel]
      <b>Location:</b> [location]
      <b>Is this for:</b> [isthisfor]
      <br>
      <br>
      <b>Carpet Cleaning:</b> [carpetcleaning]
      <br>
      <b>Protect?:</b> [carpetprotect]
      <b>Deodorize?:</b> [carpetdeodorize]
      <b>Number of Rooms:</b> [carpetroom]
      <b>Number of Hallways:</b> [carpethallways]
      <b>How many steps?:</b> [carpetstairs]
      <br>
      <br>
      <b>Upholstery Cleaning:</b> [upholsterycleaning]
      <br>
      <b>Protect?:</b> [upholsteryprotect]
      <b>Deodorize?:</b> [upholsterydeodorize]
      <b>Number of Sofa Seats:</b> [upholsterysofaseats]
      <b>Number of Sectional Seats:</b> [upholsterysectionalseats]
      <b>Number of Love Seats:</b> [upholsteryloveseats]
      <b>Number of Chairs:</b> [upholsterychair]
      <b>Number of Ottoman:</b> [upholsteryottoman]
      <b>Number of Dinining Room chair:</b> [upholsterydiningchair]
      <br>
      <br>
      <b>Car Cleaning:</b> [carcleaning]
      <br>
      <b>Floor?:</b> [carfloor]
      <b>Seats?:</b> [carseats]
      <b>Car type:</b> [cartype]
      <br>
      <br>
      <b>Area Rug:</b> [arearug]
      <br>
      <b>Protect?:</b> [rugprotect]
      <b>Deodorize?:</b> [rugdeodorize]
      <b>Length/ Width _ x _:</b> [ruglengthwidth]
      <br>
      <br>
      <b>Cleaning frequency:</b> [cleaningfrequency]
      <br>
      <b>Message / Instructions:</b><br>
      [instructions]
    </div>
  </div>
</div>

# Free estimate Message - OLD

<div style="width:800px; padding:40px 0; background-color:#eee;">
	<div style="width:560px; padding:20px; border-radius:10px; background-color:#FFF; text-align:center; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; margin:0 0 0 100px">
    <h2>Contact from website</h2>
  
    <div style="border-top:1px solid #eee; border-bottom:1px solid #eee; padding:20px 0; margin:10px 0; text-align:left">    
      <b>Name:</b> [username]
      <b>E-mail:</b> [email]
      <b>Phone Number:</b> [tel]
      <b>Location:</b> [location]
      <b>Is this for:</b> [isthisfor]
      <br>
      <br>
      <b>House Cleaning: </b> [housecleaning]
      <br>
      <b>Type of Residence:</b> [residencetype]
      <b>Approximate square feet?:</b> [squarefeet]
      <b>Number of Bedrooms:</b> [bedrooms]
      <b>Number of Bathrooms:</b> [bathrooms]
      <b>Cleaning type:</b> [cleaningtype]
      <br>
      <br>
      <b>Carpet Cleaning:</b> [carpetcleaning]
      <br>
      <b>Protect?:</b> [carpetprotect]
      <b>Deodorize?:</b> [carpetdeodorize]
      <b>Number of Rooms:</b> [carpetroom]
      <b>Number of Hallways:</b> [carpethallways]
      <b>How many steps?:</b> [carpetstairs]
      <br>
      <br>
      <b>Upholstery Cleaning:</b> [upholsterycleaning]
      <br>
      <b>Protect?:</b> [upholsteryprotect]
      <b>Deodorize?:</b> [upholsterydeodorize]
      <b>Number of Sofa Seats:</b> [upholsterysofaseats]
      <b>Number of Sectional Seats:</b> [upholsterysectionalseats]
      <b>Number of Love Seats:</b> [upholsteryloveseats]
      <b>Number of Chairs:</b> [upholsterychair]
      <b>Number of Ottoman:</b> [upholsteryottoman]
      <b>Number of Dinining Room chair:</b> [upholsterydiningchair]
      <br>
      <br>
      <b>Car Cleaning:</b> [carcleaning]
      <br>
      <b>Floor?:</b> [carfloor]
      <b>Seats?:</b> [carseats]
      <b>Car type:</b> [cartype]
      <br>
      <br>
      <b>Area Rug:</b> [arearug]
      <br>
      <b>Protect?:</b> [rugprotect]
      <b>Deodorize?:</b> [rugdeodorize]
      <b>Length/ Width _ x _:</b> [ruglengthwidth]
      <br>
      <br>
      <b>Cleaning frequency:</b> [cleaningfrequency]
      <br>
      <b>Message / Instructions:</b><br>
      [instructions]
    </div>
  </div>
</div>

# Free estimate Message - Very OLD

<div style="width:800px; padding:40px 0; background-color:#eee;">
	<div style="width:560px; padding:20px; border-radius:10px; background-color:#FFF; text-align:center; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; margin:0 0 0 100px">
    	<h2>Contact from website</h2>
		
        <div style="border-top:1px solid #eee; border-bottom:1px solid #eee; padding:20px 0; margin:10px 0; text-align:left">    
            <b>Name:</b> [username]
            <b>E-mail:</b> [email]
            <b>Phone Number:</b> [tel]
            <b>Location:</b> [location]
            <b>Is this for:</b> [isthisfor]
            <b>Type of Residence:</b> [residencetype]
            <b>Approximate square feet?:</b> [squarefeet]
            <b>Number of Bedrooms:</b> [bedrooms]
            <b>Number of Bathrooms:</b> [bathrooms]
            <b>Cleaning type:</b> [cleaningtype]
            <b>Cleaning frequency:</b> [cleaningfrequency]
            <br>
            <b>Message / Instructions:</b><br>
            [instructions]
        </div>
    </div>
</div>
