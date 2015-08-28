<?php
$domainurl = $_SERVER['SERVER_NAME'];
$link = $_POST['link'];
if ($link=='') $link = 'YOUR RAW AFFILIATE LINK GOES HERE';
$alt = "ENTER KEYWORDS HERE";

// replace YOUR RAW AFFILIATE LINK GOES HERE on line 4 with your raw affiliate link.
//
// Example 1:	If you've set up an affiliate program with ClickBank your raw affiliate link will be..
//				http://xxxxx.CLICKBANKID.hop.clickbank.net
//
//				Where CLICKBANKID is your ClickBank ID and xxxxx is your affiliate's ID.
//				You must instruct your affiliates to change 'xxxxx' with their ClickBank ID in the link to get credited for sales.
//				If your ClickBank ID was 'john' and your affiliate's ID was 'mary' the link will be http://mary.john.hop.clickbank.net
//
//
// Example 2:	If you've set up an affiliate program with PayDotCom your raw affiliate link will be..
//				https://paydotcom.com/r/12345/xxxxx
//
//				Where 12345 is your PayDotCom product ID and xxxxx is your affiliate's ID.
//				You must instruct your affiliates to change 'xxxxx' with their PayDotCom ID in the link to get credited for sales.
//				If your product ID was '12345' and your affiliate's ID was 'mary' the link will be https://paydotcom.com/r/12345/mary
//
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PSDBlowout - Affiliate Program! Join Now!</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>


<div id="headerbg">
<div id="header">
</div></div>

<div id="contentbg">
<div id="content">

    <h1><u class="red">ATTETION AFFILIATES!</u> Earn A <span class="red">Massive 75% Commission</span> Promoting This <u>Exclusive</u> Photoshop Package!</h1>
    <h2>Tested And Proven Highly Converting Website With unique Offer - <u>Get In On it Now</u>! Affiliates Are Already Making Money With This Program!</h2>
    <p><span class="xx-large"><strong>Y</strong></span><strong>ou can make money within literally minutes from now with a single email promotion!</strong> Simply g<span class="text">enerate your affiliate link from the box below, add it into the promo email and broadcast to your list! When you make a sale you'll earn a massive 75% commission!</span></p>
    <p>This offer is perfect for newbies, seasoned marketers and webmasters who need quality graphics for thier website, even resellers who want to re-sell the PSDs. With PSD Blowout you're catering to a wide variety of people and because we've packed so much content into the offer you're guaranteed to start making sales when marketed to the right people!</p>
    <p><span><strong>H</strong></span><strong>ere's 3 great reasons you should start promoting Affiliate Blogging Secrets!</strong></p>
    <blockquote>
      <p><strong>1. We do all the work. </strong>No need for dedicated servers, merchant fees, product creation or customer support. We do all the work so you only have to send the traffic!</p>
      <p><strong>2. You earn a generous 75% commission</strong> and get paid like clockwork! That's right, you earn more than us with your insanely high payout!</p>
      <p><strong>3. We give you all the tools and training you need!</strong> We have banners, autoresponder emails and more to help you make it as easy as possible!</p>
    </blockquote>
    <p><img src="images/line.gif" width="700" height="20" /></p>
    <h2 align="left">Sign Up For Updates!</h2>
    <p align="left">If you haven't already done so sign up below to get access to important updates! Your privacy is highly respected. Your information will never be shared,
      rented or sold to any third party and you may unsubscribe any time you want.</p>
    <form method="post" action="http://www.aweber.com/scripts/addlead.pl"  >
      <input type="hidden" name="meta_web_form_id" value="" />
      <input type="hidden" name="meta_split_id" value="" />
      <input type="hidden" name="listname" value="" />
      <input type="hidden" name="redirect" value="" id="redirect"	 />
      <input type="hidden" name="meta_redirect_onlist" value="" />
      <input type="hidden" name="meta_adtracking" value="" />
      <input type="hidden" name="meta_message" value="1" />
      <input type="hidden" name="meta_required" value="name,email" />
      <input type="hidden" name="meta_forward_vars" value="1" />
      <input type="hidden" name="meta_tooltip" value="" />
      <table width="500" border="0" align="center" cellpadding="1" cellspacing="0">
        <tr>
          <td width="140"><div align="right" class="text">First Name:</div></td>
          <td width="306"><input name="name" type="text" value="" size="30"  /></td>
        </tr>
        <tr>
          <td><div align="right" class="text">And Email:</div></td>
          <td><input name="email" type="text" value='' size="30"  /></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
              <input name="submit" type="submit" value="Keep Me Updated!"/>
          </div></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center"></div></td>
        </tr>
      </table>
    </form>
    <p>Below you will find all tools you'll need to get started. As a minimum requirement we recommend that you learn how to set up a basic blog with WordPress and know a little about HTML to integrate the banners and graphics into your site.</p>
    <p>You have full permission to use all the resources below and modify them as long as they are used to promote this site.</p>
    <a name="link"></a>
    <img src="images/line.gif" width="700" height="20" />
    <h2>Your Affiliate Link</h2>
    <p>Please sign up to our affiliate program and enter your raw affiliate link the box below and click update. This will update all the resources on this page with your affiliate links pre-imbedded. All you have to do is copy and paste and promote!</p>
    <form action="affiliates.php#link" method="post">
<table width="500" border="0" align="center" cellpadding="0" cellspacing="5">
<tr>
                        <td><div align="center">Affiliate Link / Custom URL:</div></td>
                      </tr>
                      <tr>
                        <td><div align="center">
                          <input name="textfield" type="text" class="text" id="textfield" value="<?php echo $link; ?>" size="35" />
                        </div></td>
                      </tr>
                      <tr>
                        <td><div align="center">
                          <input name="button" type="submit" class="text" id="button" value="Update My Resources" />
                        </div></td>
                      </tr>
                    </table>
    </form>
    <p><img src="images/line.gif" width="700" height="20" /></p>
    <h2 align="center">How To Cloak Your Link</h2>
    <p align="left">Cloaking your affiliate link will protect your commissions. Create a new text file and copy and paste in the code with your affiliate link. Rename the file to index.php and upload to a new folder on your server.</p>
    <p align="center">For example, your new affiliate link will become:<br />
        <em><strong>http://www.yourdomain.com/psdblowout</strong></em></p>
    <p align="left">If you would like to update your resources with your cloaked affiliate link enter your new URL in the affiliate link generator above.</p>
    <center><form name="textarea" id="textarea_cloak">
                           <textarea name="textarea" id="textarea_cloak" cols="60" rows="5"><?php echo "<?php header( 'Location: " ?><?php echo $link; ?><?php echo "' ) ;?>" ?></textarea>
                           <br />
                           <input type="button" value="Select Code" onclick="javascript:this.form.textarea_cloak.focus();this.form.textarea_cloak.select();" name="button2" />
    </form></center>
                      <p align="left"><img src="images/line.gif" width="700" height="20" /></p>
    <h2><span class="title4">Articles</span> / Blog Posts</h2>
    <p>Search engines love content and with our SEO optimized articles you'll be copy and paste them into your own website, blog, social network and article directories.</p>
    <form name="art1" id="art1">
      <div align="center">
        <textarea name="art1" id="art1" cols="70" rows="30">Adding Text In Photoshop
        
You can add text to an image or a blank document.  The Type tool is what you would use to do that.  This tool also works to choose an image size, a font and allows you to make additional changes in regard to text.  Everytime you make changes in regard to text, the image or document will look different.  Here’s how you would go about adding text:

Use an old file from Photoshop or you can create a new one.  You will use the Type tool.

Using the first button on the type tool bar, you will be able to change back and forth from horizontal to vertical text and vice versa.  
 
Choose a text size, font and style.  You can do this from the Type tool options bar.

There are different ways that you can have your text set up.  You have a choice of choosing from the following styles:  Smooth, Strong, Crisp, Sharp or None.  Each one looks different, so you may want to look at them all to see which one looks the best for your creation.  When you’re aligning your text, you can choose to do it from the left, center or right.

To use the color picker box, select the color square.  You can select the color for your text.

You can click the selection anywhere in your document.  You will start typing your text and it will show with whatever selections you have chosen.  If you need to make changes use the Type tool to highlight the text already there and change what needs to be changed.
</textarea>
        <br />
        <input type="button" value="Select Code" onclick="javascript:this.form.art1.focus();this.form.art1.select();" name="button" />
      </div>
    </form>
    <br />
    <form name="art2" id="art2">
      <div align="center">
        <textarea name="art2" id="art2" cols="70" rows="30">Creating 3-D Effects In Photoshop
        
3-D or three dimensional effects is something that is unique to create for your graphic projects.  Using this technique will allow you to see your graphics differently.  

Using Photoshop is a great way to create 3-D effects and other related images.  You can start with something as simple as a cube.  You want the cube to been seen from three different angles, top, left and right.  You would then include different effects on the cube to make it stand out.  Using Photoshop for this technique allows you to use your imagination and creativity.

Using the 3D Transform is used to create 3-D effects in Photoshop.  You can also use it to create different images into a 3D shape.  If you’re just looking for a basic image, then you can choose Select and Direct Select.  You can move objects with the Select function, while you can change the images by dragging with the Direct Select function.

To create shapes in 3-D, you will have to create a new layer.  Then you can use color to fill in the white space.  To step it up a bit, you may want to add darker colors or shadows.  Using fillers can help you to better see the 3-D effects in Photoshop.

You can also create text using 3-D effects in Photoshop.  With the Alt key, and E/F, and the Ctrl key (hold down), you can use the dragging method to do what you wish.

With the text layer, you will need to convert your image to make it look presentable for people to see on the monitor prior to you including filters or layers.  The text will be changed to where you can edit it as needed.  Prior to completing the conversion, create an extra copy.  After the conversion, you are not allowed to edit any text.  

To get different image creations, it is probably a good idea to test out some image effects.  Create some where you can do 3-D images with shapes, text and other effects.

</textarea>
        <br />
        <input type="button" value="Select Code" onclick="javascript:this.form.art2.focus();this.form.art2.select();" name="button2" />
      </div>
    </form>
    <br />
    <form name="art3" id="art3">
      <div align="center">
        <textarea name="art3" id="art3" cols="70" rows="30">Creating A Lighting Effects In Photoshop
        
Including special effects such as lights to provide some pizzazz to a photo can be interesting.  You can turn regular lights into some unique lighting effects.  A lot of people that have substantial experience using Photoshop use these effects for their projects.  It’s a pretty easy task to learn.  Here is how you can learn it and create your masterpiece:

Select File, New and then click OK.

Choose the “Gradient” tool and click on the left button of your mouse, holding it down.  Choose the “Paint Bucket” tool and choose the color Black.

Click the screen once.  The background should turn black.  Select the Filter component and choose “Render”, then choose Lightning Effects.

Select “Circle of Lights” and choose OK.  You will see something called objects that look like spheres (orbs).  

Choose “Render” from the Filter menu and choose “Lens Flare”.  This is how you will make changes to your photo.  In order to get the light where you need it to be, you will have to move the cross in the center of the screen.  Using the “Brightness” bar, slide it to the middle.  Use the “50 to 300 mm zoom” selection for the lens and select Ok.  You will see a lot of lighted halo shapes.

Staying in the Filter menu, choose the “Stylize” command.  Choose “Glowing Edges”.  This is used to decrease thickness of the halos.  The rings will stand out on the screen.  Using the “Image” menu, choose Adjustments and then Auto Levels.  You will see the halos in the special effects on your computer screen. 

</textarea>
        <br />
        <input type="button" value="Select Code" onclick="javascript:this.form.art3.focus();this.form.art3.select();" name="button" />
      </div>
    </form>
    <br />
    <form name="art4" id="art4">
      <div align="center">
        <textarea name="art4" id="art4" cols="70" rows="30">Creating Backgrounds In Photoshop
        
You can create different backgrounds for your images.  You will have to use more than one filter to do this.  Using the filters can help to create a background that is different than what you may have seen before.  You can create custom backgrounds that are unique and stand out from other creations.

To do this, you would have to select the File menu and choose New for a brand new dialog box.  

In order to create a canvas, you would have to select the Width and Height components.  If you have anything you would like to change, change them in the settings section.  You can change the colors and resolutions if you wish.

Close the New dialog box and present the canvas on the computer screen.  You should see the word “Background” in the layer of the Layers palette.
In the “Filter” menu, select “Artistic” and choose on the options for the Filter dialog box.  You have a choice of filters that you can use for your document.  There is Artistic, Brush Strokes, Distort, Sketch, Stylize or Texture.  They are all located in the drop down box where the Filters category is.  

Select a filter from the category you have chosen. You will be able to see a preview of this filter to the left side of the "Filter" dialog box. 
Go to the right side of the dialog box if you need to adjust the setting.  Confirm the filter that you want to use by choosing OK.  If you need to include additional filters you can do so.  This will help you to have additional custom backgrounds.

</textarea>
        <br />
        <input type="button" value="Select Code" onclick="javascript:this.form.art4.focus();this.form.art4.select();" name="button" />
      </div>
    </form>
    <br />
    <form name="art5" id="art5">
      <div align="center">
        <textarea name="art5" id="art5" cols="70" rows="30">Creating A Watermark In Photoshop
        
You can create your own watermark to your image in a matter of minutes by using your mouse.  

Select File, New and create the width and height using 250X125 px.  You will also need to have a background that is transparent. 
 
Select the “Horizontal Type Tool”, set you color to your choosing and type in what you want your watermark image to read.

Using the Ctrl button, also press the letter “T” keys on the text and choose the rotate command.  With your mouse, go over the image and rotate it to what you want.

Select Edit, Define Pattern and give it a sample name since it is a sample and not the real thing; you’re testing this technique first to make sure it works.  

If you have other images or photos that you want to do this with, open the file that you want to watermark.  Apply a new layer by pressing the Ctrl and the letter “J” keys.  Select the Edit and Fill commands.  Choose a pattern from the Custom Pattern selection box.  You can set the layer’ opacity to what you want it to be.  Save the new image with the watermark.

</textarea>
        <br />
        <input type="button" value="Select Code" onclick="javascript:this.form.art5.focus();this.form.art5.select();" name="button2" />
      </div>
    </form>
    <br />
    <form name="art6" id="art6">
      <div align="center">
        <textarea name="art6" id="art6" cols="70" rows="30">Creating A Shadow Effect In Photoshop
        
Create a new image in Photoshop.  As a sample, use 200 pixels and 72 pixels as the resolution.  This is for the width and the height.  After you’ve created the effect, then you can do more using different settings.  You want to make sure it comes out right, hence the reason for using 200 pixels and 72 pixels as the resolution.  

Using the Horizontal Type Tool, create a text box.  The image that you are using should be blank.  This can be done by using your cursor at the upper left corner, clicking it and using the dragging method to bring it to the lower right corner.

Use 48 point font for the text and center it.  Choose a simple color and put it in the text box several times using the return key.  The word “shadow” should be typed in the text box.  Place the word in the center of the image.  Make sure it is showing up large inside of the box.  You should eventually notice a shadow behind the word.

Using the “Styles and Effects” menu, look for two drop-down menus.  The one on the left should be “layer styles” and the one on the right should be “drop shadows”.  Select one of the options for the drop shadow.  Select the “low” shadow and you will see the shadow behind the text.  
You should test the shadow effect options in Photoshop using different styles.  Eventually, you will find one that suits you the best.  Also, you need to make sure that it blends in with whatever images you will be using.  

</textarea>
        <br />
        <input type="button" value="Select Code" onclick="javascript:this.form.art6.focus();this.form.art6.select();" name="button" />
      </div>
    </form>
    <p><img src="images/line.gif" width="700" height="20" /></p>
    <h2>Personal Review</h2>
    <p>Reviews are a great way pre-sell your visitors before they've seen the main offer. We've gone through the trouble of hiring a product reviewer so that you can copy and paste the unbasied opinions to your blog, email, or even report.</p>
    <form name="rev1" id="rev1">
      <div align="center">
        <textarea name="rev1" id="rev1" cols="70" rows="30">PSD Blowout Review
        
I myself am by no means a graphic designer. I struggle to even make a header look good! But When I came across a new product called PSD Blowout I knew instantly that this is exactly what I needed to get to improve my website graphics.

I’ve seen a lot of so-called templates and ready-made websites online before but this was completely different. I could clearly see that they were not made for the sake of selling to you, because these were personal Photoshop PSD projects that were used to run a business.

Inside you get over 2GB – yes 2GBs worth of PSDs. Now this is a lot, almost like downloading a ‘ahem’ divx DVDs from sites so I recommend you have a download manager or fast connection at hand.

Once downloaded, you’ll be gob-smacked by the amount of design and talent that went into creating these graphics. The graphics are simply amazing and will help you when you come to create your own website. All the layers in the PSDs come un-flattened so you take bit and pieces that you want and copy them to your site. Same with the text layers too – if you see something that you like, just right-click and copy the layer style to a new text layer and you’re all set.

I really like this package and if you are thinking about setting up a website or deal with private label products or even want to start a graphic design service and need something to work with, then this is something you need.

</textarea>
        <br />
        <input type="button" value="Select Code" onclick="javascript:this.form.rev1.focus();this.form.rev1.select();" name="button" />
      </div>
    </form>
    <p><img src="images/line.gif" width="700" height="20" /></p>
    <h2>Emails And Auto-Responders</h2>
    <p>Email marketing is still one of the most effective ways to get your message across and make moeny online. Use the emails provided below to send out a broadcast or series of emails to your subscribers. We   highly recommend that you also add the Emails into your   auto-responder sequence to ensure you continue to earn when new subscribers enter your list!</p>
    <p>Please note that these Emails have been formatted to work with Aweber. Replace any variable tags with the ones suited for your auto-responder.</p>
    <form name="ar1" id="ar1">
      <div align="center">
        <textarea name="ar1" id="ar1" cols="70" rows="30">SUBJECT: 2.3GB Unflattened PSDs To 27 Website Designs Available For Download!

Hi {!firstname_fix},

Designing a website from scratch does require some level of
skill. Forget the copywriting for a second or what you're
even planning to sell, if your website looks cheap, your
visitors will think so too.

This puts you in one of two situations - outsourcing your
graphics or watching loads of video tutorials and learning
how do it yourself.

In an effort to help you save time, effort and money, I'm
going to provide you with over 12 months worth of personal
work.

You don't need a degree in art and design, you don't need
to spend hours watching poor quality videos on YouTube,
and you definitely won't need to fork out $497+ on a graphic
designer.

What I'm offering is the RAW and UNFLATTENED PSDs to 27
websites which have been built to maintain and sustain a
solid income online.

With each website you'll receive the PSD template, eCovers,
banners buy now buttons and so much more. And because
they're unflattened, you can drag and drop the graphic
elements into your own website such as text, logos,
people, icons, textures, colors and much more.

With these RAW templates you'll be able to get REALLY
creative and produce beautiful and profitable websites
all by yourself!

Check out all the project below, over 2.3GB worth of website
desigs...

<?php echo $link; ?>


Regards,
YOUR NAME GOES HERE

P.S. For those who are really into resell rights, you'll
also be able to pick up Master Resell Rights to graphics
and a duplicate of the entire site as an optional upgrade.</textarea>
        <br />
        <input type="button" value="Select Code" onclick="javascript:this.form.ar1.focus();this.form.ar1.select();" name="button" />
      </div>
    </form>
    <br />
    <form name="ar2" id="ar2">
      <div align="center">
        <textarea name="ar2" id="ar2" cols="70" rows="30">SUBJECT: Place Yourself In The Top Percentile Of Marketers!

Hi {!firstname_fix},

Did you know that by producing top
3D eCovers like the examples shown
in the PSD Blowout will place you well
and truly above the other internet
marketers who are still trying to figure
out why their products are not selling?

Graphics alone can seriously increase
your conversions and your visitors
will stop skimming through your sales
pages and take the time to read what
you have written!

In fact, your graphics will look SO
GOOD that the customers will think
they're getting a physical product!

More leads equates to more customers
which leads to more sales and finally
more profits and money in your bank!

For example..

The most effective squeeze pages from
my experience are the ones where the
prospect doesn't have the ability to
scroll down. All the content on your
squeeze page should be above the fold
of your page and this by all means
includes your eCover.

Why?

Well because when your potential lead
sees an image of a very real-looking
cover graphic, this gives them the
subconscious notion that they're
receiving great quality in return for
their details.

Again this is visual psychology working
it's magic and it's a great little
perceived value booster.

Check out the link below to see how
you can add that perceived value to
increase your conversions;

<?php echo link; ?>


Regards,
YOUR NAME GOES HERE

</textarea>
        <br />
        <input type="button" value="Select Code" onclick="javascript:this.form.ar2.focus();this.form.ar2.select();" name="button" />
      </div>
    </form>
    <br />
    <form name="ar3" id="ar3">
      <div align="center">
        <textarea name="ar3" id="ar3" cols="70" rows="30">Good Graphics VS Good Product

Hi {!firstname_fix},

Is it possible that your website(s)
are being let down by the lack of
attention in the graphics department?

For the majority of online marketers,
graphics is at the bottom of their
priority list, if there at all!

Here are the real advantages to being
able to represent your product the
way it's supposed to be..


Your products become easier to sell..

Quite simply because your graphics
will do all the 'talking' for you!


Your price starts to seem minute in
comparison to what you're selling.. 

that's because you now know how to
create huge package images that look
like you're giving so much value for
the price you're asking!


You can start increasing your pricing..

Simply because the perceived value of
your product has just gone up!


You start to attract more affiliates
to sell your product than you could
have ever imagined..

because affiliates like promoting
products that covert so that they can
profit from it years from now!


Your sales page dramatically improves
with the graphics makeover..

which invites your customers to read
what's on the sales page to improve
your conversions.


You have the ability to profit from
ANY resell rights product..

You'll never suffer from marketing the
same resell rights product in the same
way as another marketer because you're
smart and you've now got the ability
to transform ANY product!


You can use this skill to capture more
leads and build a mailing list..

By applying design layout, eCover
graphics and mini-site design techniques
you're in control of what your visitor
should do when they land on your squeeze
page which means more sign up for YOU!


Check out the raw and unflattened
PSD package I put together for you so
you too can get a head start!

<?php echo link; ?>


Regards,
YOUR NAME GOES HERE

</textarea>
        <br />
        <input type="button" value="Select Code" onclick="javascript:this.form.ar3.focus();this.form.ar3.select();" name="button" />
      </div>
    </form>
    <br />
    <form name="ar4" id="ar4">
      <div align="center">
        <textarea name="ar4" id="ar4" cols="70" rows="30">SUBECJT: First Impressions Count!
        
You may be new to the world of internet
marketing but you understand the basics
of selling a digital product.

You've spent several weeks putting your
eBook together, writing it entirely by
hand, researching your niche and getting
to know your subject inside out.

NOW it's time to present your product to
the marketplace ready for selling..

You set up a website, slap on your eBook
and sales page and drive traffic to it.
You wait for that first sale to come in..
but nothing happens. You try adding more 
value to your product by writing a better
sales page and improving on your eBook but
still not a single poxy sale..

Why is this? The answer is simple..

..PRESENTATION!

Although the content play's a large role
in the quality and success of your product,
you're not even going to make a single sale
or receive a second glance if your product 
looks like a pile of (insert your word here).

I don't know about you but there is no
doubt in my mind that people are naturally
attracted to beauty and are generally not
interested if it doesn't appeal to their
senses.

Would You Buy It?

Think about it, would you buy a physical
product if the packaging was damaged or
awful? Even though you know there's probaby
nothing wrong with the product inside you'd
still probably pick the one without the
damage or bad packaging on it wouldn't you?

To make matters worse, you and I both know
that the internet is becoming more and more
saturated with many digital products, some
of which are direct competitors in your
niche.

And with so many people investing in more
resell rights eBooks and 'make money'
opportunities, there is no sign this
slowing down so the need to kill off any
competition becomes more serious!

That said, making your product stand out
of the crowd is going to be a challenge.
Forget the quality of the product, or how
good you think it is, if you can't grab
your prospect's attention within the first
5 seconds you might as well give up.

They will be clicking the back button on
their browser in no time. I can tell you 
this through experience but it's no secret..

First impressions counts which is why the
PSD Blowout will help you design beautiful
websites that visitors will come and stop
and look at.

Check out the fill 2.3GB package below:

<?php echo $link; ?>


Regards,
YOUR NAME GOES HERE

</textarea>
        <br />
        <input type="button" value="Select Code" onclick="javascript:this.form.ar4.focus();this.form.ar4.select();" name="button" />
      </div>
    </form>
    <br />
    <form name="ar5" id="ar5">
      <div align="center">
        <textarea name="ar5" id="ar5" cols="70" rows="30">SUBJECT: 2 Marketers Sell The Same Product.. Who Wins?

{!firstname_fix},

What do you think will happen when two
marketers sell the same resell rights
product at the same time, using the same
marketing techniques and same price?

There is no more uniquness because they
both look exactly the same and the
customers wouldn't notice a difference.

One marketer will end up under-cutting
the other, both prices will drop and
both products will de-value until
neither can make a profit and the
customers are left reluctant to buy 
because of the low price and the lost
percecption of value..

Happens ALL The Time!

But what if one took a little time to
change and enhance the eCover and
presentation.. who do you think will
come out with more sales?

Well you needn't worry about anyone
over-taking you and optimizing their
presentation because I plan to make
YOU that very person!

Wouldn't it be great it you could kill
off every competitor in your niche and
maximise all the profit potential for
yourself?

Don't you think you deserve it?..

Especially after all the previous
effort you have put in to get you this
far!..

Believe me I know what it feels like!

You don't want to be wasting anymore of
your time moving onto the 'next big thing'
and find yourself in the same position.

This is why the PSD Blowout was created,
so you can speed ahead of the game and
hit them hard!

<?php echo $link; ?>


Regards,
YOUR NAME GOES HERE

</textarea>
        <br />
        <input type="button" value="Select Code" onclick="javascript:this.form.ar5.focus();this.form.ar5.select();" name="button" />
      </div>
    </form>
    <br />
    <form name="ar6" id="ar6">
      <div align="center">
        <textarea name="ar6" id="ar6" cols="70" rows="30">SUBJECT: 7 Profitable Things You Can Do With Your Graphics...

Hi {!firstname_fix},

By now you're well aware of how important
it is to have good solid graphics working
for you and representing your product.

And you'll also be aware of how the PSD
Blowout can help you out and make sure
it happens.

But now I want to give you some real and
practive tips for using these PSDs.

1. You can re-face your existing
product that’s not selling so well! –
You may already have your own product
that’s running live on your server
right now. Problem is, is it really
pulling in the sales like you hoped? If
not, it may very well be down to your
presentation! By simply rebranding one
of the graphics packages to match your
product name, you’ll instantly have a
new site that you can be proud to
promote!

2. You can re-face your old PLR
product! – PLR is useless just sitting
on your hard drive. You may have it set
aside in a ‘to work on later’ folder
but the fact is you’re put off from the
amount of work you’d have to go through
into order to bring it to life! Simply
choose a graphic set and rebrand with
your new product name and you’ll
finally have your new PLR product that
you invested in making money for you,
rather than costing you!

3. You can create a new squeeze page
to collect leads! – Building squeeze
pages from scratch does take a toll on
your time. What better way to get yours
up and running by using a template
that’s already been made for you so you
only have to concentrate on the
mechanics of your site!

4. You can create a review-style
website that promotes other people’s
products! – Review sites or pre-sell
templates as they’re also known, are
usually very plain and boring. It
doesn’t have to be that way. Why not
stand out from the affiliate crowd and
make a statement with these graphic
templates!

5. You can create an graphic store and
sell them individually! – If you don’t
like the idea of using these graphics
for your own use, then why not sell
them? If you purchase the Master Resell
Rights license, you’ll be able create a
new e-store dedicated to just providing
graphics for internet marketers!

6. You can sell them as they are! –
Want to make your money back many times
over? Now you can sell the entire
graphics package exactly as they are
without any modification or needing to
set up your own site! If you opt for
the Master Resell Rights license you’ll
get all the tools you need to start
selling valuable in-demand graphics
that marketers and webmasters NEED!

7. You can use them as membership
content to keep your members happy! –
If you already own a membership site,
you can add these graphics into your
members area and keep your customers
very happy! Even if you haven’t got a
membership site yet, these graphic
packages will form a great basis for
you to start with!

There are just so many ways to make
your own amazing and profitable
websites with these graphics you see
here in front of you that it will cost
you NOT to have them! Even the ones
mentioned here can still be dug into
deeper!

You really cannot lose! With these
UNFLATTENED PSDs it's now easier than
ever to start making beautiful websites
that will seriously increase your
conversions!

<?php echo $link; ?>


Regards,
YOUR NAME GOES HERE


</textarea>
        <br />
        <input type="button" value="Select Code" onclick="javascript:this.form.ar6.focus();this.form.ar6.select();" name="button" />
      </div>
    </form>
    <h2><img src="images/line.gif" width="700" height="20" /></h2>
    <h2>Email / Forum Signatures</h2>
    <p>Adding a signature to your email or forum post is one of the most underrated forms of generating traffic. Simply copy and paste one of the signatures below and you'll be promoting without knowing it and generating sales when you least expect it.</p>
    <table width="500" border="0" align="center" cellpadding="0" cellspacing="10">
      <tbody>
        <tr>
          <td>2.3GB Of Unflattened PSDs - Download Here...<br />
          <?php echo $link; ?></td>
        </tr>
        <tr>
          <td>Quality Graphics Without The Heavy Price Tag...<br />
          <?php echo $link; ?></td>
        </tr>
        <tr>
          <td>Websites Look Like They Were Built By A Newbie?... Getting Newbie Results?...<br />
          <?php echo $link; ?></td>
        </tr>
      </tbody>
    </table>
    <p><img src="images/line.gif" width="700" height="20" /></p>
    <h2>Twitter Tweets</h2>
    <p>Twitter is a great tool for generating more traffic. Sign up for a Twitter account it you haven't already done so and use the tweets below to spread the word. If you need to build a large following in Twitter we recommend you use a tool called <a href="http://www.twittollower.us" target="_blank"><strong>Twittollower</strong></a>.</p>
    <table border="0" cellpadding="0" cellspacing="10" width="100%">
      <tbody>
        <tr>
          <td width="80%">2.3GB Of Unflattened PSDs - Download Here...</td>
          <td width="20%"><a href="http://twitter.com/home?status=2.3GB Of Unflattened PSDs - Download Here...<?php echo $link; ?>" target="_blank"><strong>Tweet It!</strong></a></td>
        </tr>
        <tr>
          <td>Quality Graphics Without The Heavy Price Tag...</td>
          <td><a href="http://twitter.com/home?status=Quality Graphics Without The Heavy Price Tag...<?php echo $link; ?>" target="_blank"><strong>Tweet It!</strong></a><a href="http://twitter.com/home?status=Learn How To Create Products, Learn How To Make Money... ?hop={clickbank_id}"></a></td>
        </tr>
        <tr>
          <td>Websites Look Like They Were Built By A Newbie?... Getting Newbie Results?...</td>
          <td><a href="http://twitter.com/home?status=Websites Look Like They Were Built By A Newbie?... Getting Newbie Results?...<?php echo $link; ?>" target="_blank"><strong>Tweet It!</strong></a><a href="http://twitter.com/home?status=Better to earn 1% of 100 people's efforts than 100% of your own... ?hop={clickbank_id}"></a></td>
        </tr>
      </tbody>
    </table>
    <p><img src="images/line.gif" width="700" height="20" /></p>
    <h2>PPC Ads</h2>
    <p>Using paid advertising is a great way to get instant traffic. When targeted at the right people you'll be able to turn a profit. Use these sample ads below as a basis for writing your own.</p>
    <table width="500" border="0" align="center" cellpadding="0" cellspacing="10">
      <tbody>
        <tr>
          <td width="80%">Looking For Minisite Graphics?<br />
          2.3GB Of Unflattened PSDs To Download<br />
          <?php echo $link; ?></td>
        </tr>
        <tr>
          <td>Need Graphics But No Budget?<br />
          Get Quality PSDs Without Heavy Price Tag<br />
          <?php echo $link; ?></td>
        </tr>
        <tr>
          <td>Websites Looking Noobish?<br />
          Get New Graphics, Get Pro Results<br />
          <?php echo $link; ?></td>
        </tr>
      </tbody>
    </table>
    <p><img src="images/line.gif" width="700" height="20" /></p>
    <h2>Keywords</h2>
    <p>Use the keywords below to optimize your site and get it ranked in the search engines for specific keywords and keyphrases. They can also be used to help start your PPC campaign.</p>
    <form name="key1" id="key1">
      <div align="center">
        <textarea name="key1" id="key1" cols="70" rows="30">photoshop
adobe photoshop
photoshop tutorials
photoshop tutorial
photoshop elements
free photoshop
photoshop brushes
photoshop cs3
adobe photoshop free download
free photoshop download
adobe photoshop elements
photoshop free
photoshop com
online photoshop
photoshop effects
photoshop online
free photoshop brushes
photoshop download
adobe photoshop 7.0
download photoshop free
photoshop actions
photoshop cs2
photoshop backgrounds
photoshop textures
photoshop cs
download photoshop
photoshop trial
photoshop tricks
photoshop 7
photoshop text effects
photoshop software
how to use photoshop
free adobe photoshop
adobe photoshop download
photoshop 7.0
adobe photoshop tutorial
photoshop plugins
photoshop fonts
adobe photoshop cs2
photoshop templates
photoshop filters
photoshop shapes
photoshop tutorials for beginners
photoshop layers
photoshop lightroom
adobe photoshop tutorials
photoshop jobs
photoshop 8
adobe photoshop free
adobe photoshop cs
photoshop elements tutorials
learn photoshop
adobe photoshop 7
how to photoshop
photoshop text
adobe photoshop lightroom
photoshop contest
photoshop training
photoshop for dummies
free adobe photoshop download
free photoshop software
free photoshop tutorials
photoshop art
photoshop 6
photoshop help
photoshop background
photoshop magazine
photoshop tips
photoshop text tutorials
photoshop demo
photoshop styles
tutorial photoshop
adobe photoshop 8
www photoshop com
advanced photoshop
download adobe photoshop
adobe photoshop trial
download adobe photoshop free
buy photoshop
photoshop techniques
photoshop serial number
photoshop photo effects
gimp photoshop
free photoshop 7.0 download
photoshop brush
best photoshop tutorials
photoshop basics
photoshop books
adobe photoshop 6.0
photoshop images
adobe photoshop com
adobe photoshop cs2 serial number
adobe photoshop elements 2.0
photoshop animation
photoshop downloads
adobe photoshop software
how to use adobe photoshop
fonts for photoshop
adobe photoshop 6
adobe photoshop album
adobe photoshop download free
photoshop cs2 download
photoshop cs2 keygen
adobe photoshop serial number
adobe photoshop 5
cool photoshop tutorials
adobe photoshop 4.0
adobe photoshop help
easy photoshop tutorials
adobe photoshop brushes
photoshop adobe
adobe photoshop elements 5.0
adobe photoshop training
adobe photoshop 5.0
adobe photoshop online
buy adobe photoshop
adobe photoshop cs2 download
photoshop effects tutorials
free download adobe photoshop
adobe photoshop 5.5
software adobe photoshop
adobe photoshop 8.0
adobe photoshop album starter edition
adobe photoshop cs2 keygen
adobe photoshop elements 3.0
adobe photoshop upgrade
learn adobe photoshop
adobe photoshop crack
adobe photoshop elements 5
adobe photoshop element
adobe photoshop classes
adobe photoshop for dummies
cheap adobe photoshop
adobe photoshop serial
adobe photoshop cs2 serial
adobe photoshop student
adobe photoshop cs2 tutorials
adobe photoshop cs 2
adobe photoshop elements 4.0
adobe photoshop plugins
adobe photoshop 4
adobe photoshop cs1
adobe photoshop freeware
adobe photoshop 3
adobe photoshop cs8
adobe photoshop cs2 free download
adobe photoshop elements 2
adobe photoshop 9
adobe photoshop classroom book
adobe photoshop album starter
adobe photoshop elements tutorial
adobe photoshop 7.0 1
adobe photoshop downloads
adobe photoshop elements 4
adobe photoshop demo
adobe photoshop cs2 software
adobe photoshop filters
adobe photoshop elements 3
adobe photoshop fonts
adobe photoshop price
adobe photoshop 7.0 tutorials
adobe photoshop 7 download
adobe photoshop 7 free download
adobe photoshop cs classroom in a book
adobe photoshop 3.0
adobe photoshop 7.0 tutorial
adobe photoshop cs2 tutorial
adobe photoshop 7 0
adobe photoshop cs keygen
adobe photoshop effects
adobe photoshop elements tutorials
adobe photoshop templates
adobe photoshop 2.0
adobe photoshop illustrator
free adobe photoshop software
adobe photoshop cs2 upgrade
adobe photoshop 7 serial number
free adobe photoshop cs2
tutorials adobe photoshop
adobe photoshop cs2 for photographers</textarea>
        <br />
        <input type="button" value="Select Code" onclick="javascript:this.form.key1.focus();this.form.key1.select();" name="button" />
      </div>
    </form>
    <p><img src="images/line.gif" width="700" height="20" /></p>
    <h2>Banners</h2>
    <p>Use our graphics to generate interest on your website, blog, email newsletters, eBooks, and thankyou pages. Place them next to a text-rich article related to the subject for maximum effect. You can use the integrated code, or right-click on an image and save it to your desktop for later use.</p>
    <table width="600" border="0" align="center" cellpadding="2" cellspacing="0">
      <tr>
        <td><div align="center"><span class="text"><img src="banners/125x125.gif" width="125" height="125" alt="<?php echo $alt; ?>" /></span></div></td>
        <td><div align="center"><span class="text"><img src="banners/125x125.jpg" width="125" height="125" alt="<?php echo $alt; ?>" /></span></div></td>
      </tr>
      <tr>
        <td><div align="center">
            <form name="textarea" id="textarea125x125_01">
              <textarea name="textarea2" id="textarea125x125_01" cols="35" rows="5"><a href="<?php echo $link; ?>" onmouseover="window.status='Click Here To Grab Your PSDs!';return true" onmouseout="window.status='';"><img src="<?php echo $domainurl; ?>/banners/125x125.gif" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
              <br />
              <input type="button" value="Select Code" onclick="javascript:this.form.textarea125x125_01.focus();this.form.textarea125x125_01.select();" name="button" />
            </form>
        </div></td>
        <td><div align="center">
            <form name="textarea" id="textarea125x125_02">
              <textarea name="textarea2" id="textarea125x125_02" cols="35" rows="5"><a href="<?php echo $link; ?>" onmouseover="window.status='Click Here To Grab Your PSDs!';return true" onmouseout="window.status='';"><img src="<?php echo $domainurl; ?>/banners/125x125.jpg" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
              <br />
              <input type="button" value="Select Code" onclick="javascript:this.form.textarea125x125_02.focus();this.form.textarea125x125_02.select();" name="button" />
            </form>
        </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"><span class="text"><img src="banners/250x250.gif" width="250" height="250" alt="<?php echo $alt; ?>" /></span></div></td>
        <td><div align="center"><span class="text"><img src="banners/250x250.jpg" width="250" height="250" alt="<?php echo $alt; ?>" /></span></div></td>
      </tr>
      <tr>
        <td width="375"><p align="center" class="text">&nbsp;</p>
            <form name="textarea" id="textarea250x250_01">
              <div align="center">
                <textarea name="textarea2" id="textarea250x250_01" cols="35" rows="5"><a href="<?php echo $link; ?>" onmouseover="window.status='Click Here To Grab Your PSDs!';return true" onmouseout="window.status='';"><img src="<?php echo $domainurl; ?>/banners/250x250.gif" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
                <br />
                <input type="button" value="Select Code" onclick="javascript:this.form.textarea250x250_01.focus();this.form.textarea250x250_01.select();" name="button" />
              </div>
            </form>
          <div align="center">
              <p></p>
          </div></td>
        <td width="375"><p align="center" class="text">&nbsp; </p>
            <form name="textarea" id="textarea250x250_02">
              <div align="center">
                <textarea name="textarea2" id="textarea250x250_02" cols="35" rows="5"><a href="<?php echo $link; ?>" onmouseover="window.status='Click Here To Grab Your PSDs!';return true" onmouseout="window.status='';"><img src="<?php echo $domainurl; ?>/banners/250x250.jpg" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
                <br />
                <input type="button" value="Select Code" onclick="javascript:this.form.textarea250x250_02.focus();this.form.textarea250x250_02.select();" name="button" />
              </div>
            </form>
          <div align="center">
              <p></p>
          </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>

      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><img src="banners/468x60.gif" width="468" height="60" alt="<?php echo $alt; ?>" /></div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
            <form name="textarea" id="textarea468x60_01">
              <textarea name="textarea" id="textarea468x60_01" cols="45" rows="5"><a href="<?php echo $link; ?>" onmouseover="window.status='Click Here To Grab Your PSDs!';return true" onmouseout="window.status='';"><img src="<?php echo $domainurl; ?>/banners/468x60.gif" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
              <br />
              <input type="button" value="Select Code" onclick="javascript:this.form.textarea468x60_01.focus();this.form.textarea468x60_01.select();" name="button" />
            </form>
        </div></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><img src="banners/468x60.jpg" width="468" height="60" alt="<?php echo $alt; ?>" /></div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
            <form name="textarea" id="textarea468x60_02">
              <textarea name="textarea2" id="textarea468x60_02" cols="45" rows="5"><a href="<?php echo $link; ?>" onmouseover="window.status='Click Here To Grab Your PSDs!';return true" onmouseout="window.status='';"><img src="<?php echo $domainurl; ?>/banners/468x60.jpg" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
              <br />
              <input type="button" value="Select Code" onclick="javascript:this.form.textarea468x60_02.focus();this.form.textarea468x60_02.select();" name="button" />
            </form>
        </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"><span class="text"><img src="banners/120x600.gif" width="120" height="600" alt="<?php echo $alt; ?>" /></span></div></td>
        <td><div align="center"><span class="text"><img src="banners/120x600.jpg" width="120" height="600" alt="<?php echo $alt; ?>" /></span></div></td>
      </tr>
      <tr>
        <td><div align="center">
            <form name="textarea" id="textarea120x600_01">
              <span class="text">
              <textarea name="textarea2" id="textarea120x600_01" cols="35" rows="5"><a href="<?php echo $link; ?>" onmouseover="window.status='Click Here To Grab Your PSDs!';return true" onmouseout="window.status='';"><img src="<?php echo $domainurl; ?>/banners/120x600.gif" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
              <br />
              <input type="button" value="Select Code" onclick="javascript:this.form.textarea120x600_01.focus();this.form.textarea120x600_01.select();" name="button" />
              </span>
            </form>
        </div></td>
        <td><div align="center">
            <form name="textarea" id="textarea120x600_02">
              <span class="text">
              <textarea name="textarea2" id="textarea120x600_02" cols="35" rows="5"><a href="<?php echo $link; ?>" onmouseover="window.status='Click Here To Grab Your PSDs!';return true" onmouseout="window.status='';"><img src="<?php echo $domainurl; ?>/banners/120x600.jpg" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
              <br />
              <input type="button" value="Select Code" onclick="javascript:this.form.textarea120x600_02.focus();this.form.textarea120x600_02.select();" name="button" />
              </span>
            </form>
        </div></td>
      </tr>
      <tr>
        <td><p align="center" class="text">&nbsp;</p></td>
        <td><p align="center" class="text">&nbsp;</p></td>
      </tr>
      <tr>
        <td><div align="center"><span class="text"><img src="banners/160x600.gif" width="160" height="600" alt="<?php echo $alt; ?>" /></span></div></td>
        <td><div align="center"><span class="text"><img src="banners/160x600.jpg" width="160" height="600" alt="<?php echo $alt; ?>" /></span></div></td>
      </tr>
      <tr>
        <td><div align="center">
            <form name="textarea" id="textarea160x600_01">
              <span class="text">
              <textarea name="textarea2" id="textarea160x600_01" cols="35" rows="5"><a href="<?php echo $link; ?>" onmouseover="window.status='Click Here To Grab Your PSDs!';return true" onmouseout="window.status='';"><img src="<?php echo $domainurl; ?>/banners/160x600.gif" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
              <br />
              <input type="button" value="Select Code" onclick="javascript:this.form.textarea160x600_01.focus();this.form.textarea160x600_01.select();" name="button" />
              </span>
            </form>
        </div></td>
        <td><div align="center">
            <form name="textarea" id="160x600_02">
              <span class="text">
              <textarea name="textarea2" id="160x600_02" cols="35" rows="5"><a href="<?php echo $link; ?>" onmouseover="window.status='Click Here To Grab Your PSDs!';return true" onmouseout="window.status='';"><img src="<?php echo $domainurl; ?>/banners/160x600.jpg" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
              <br />
              <input type="button" value="Select Code" onclick="javascript:this.form.textarea160x600_02.focus();this.form.textarea160x600_02.select();" name="button" />
              </span>
            </form>
        </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"><span class="text"><img src="banners/package100x75_01.gif" width="100" height="75" alt="<?php echo $alt; ?>" /></span></div></td>
        <td><div align="center"><span class="text"><img src="banners/package100x100_01.gif" width="100" height="100" alt="<?php echo $alt; ?>" /></span></div></td>
      </tr>
      <tr>
        <td><div align="center">
            <form name="textarea" id="textarea100x75_01">
              <span class="text">
              <textarea name="textarea2" id="textarea100x75_01" cols="35" rows="5"><a href="<?php echo $link; ?>" onmouseover="window.status='Click Here To Grab Your PSDs!';return true" onmouseout="window.status='';"><img src="<?php echo $domainurl; ?>/banners/100x75.gif" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
              <br />
              <input type="button" value="Select Code" onclick="javascript:this.form.textarea100x75_01.focus();this.form.textarea100x75_01.select();" name="button" />
              </span>
            </form>
        </div></td>
        <td><div align="center">
            <form name="textarea" id="textarea100x100_01">
              <span class="text">
              <textarea name="textarea2" id="textarea100x100_01" cols="35" rows="5"><a href="<?php echo $link; ?>" onmouseover="window.status='Click Here To Grab Your PSDs!';return true" onmouseout="window.status='';"><img src="<?php echo $domainurl; ?>/banners/package100x100.gif" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
              <br />
              <input type="button" value="Select Code" onclick="javascript:this.form.textarea100x100_01.focus();this.form.textarea100x100_01.select();" name="button" />
              </span>
            </form>
        </div></td>
      </tr>
      <tr>
        <td><p align="center" class="text">&nbsp;</p></td>
        <td><p align="center" class="text">&nbsp;</p></td>
      </tr>
      <tr>
        <td><div align="center"><span class="text"><img src="banners/package200x150_01.gif" width="200" height="150" alt="<?php echo $alt; ?>" /></span></div></td>
        <td><div align="center"><span class="text"><img src="banners/package300x225_01.gif" width="300" height="225" alt="<?php echo $alt; ?>" /></span></div></td>
      </tr>
      <tr>
        <td><div align="center">
            <form name="textarea" id="textarea200x150_01">
              <span class="text">
              <textarea name="textarea2" id="textarea200x150_01" cols="35" rows="5"><a href="<?php echo $link; ?>" onmouseover="window.status='Click Here To Grab Your PSDs!';return true" onmouseout="window.status='';"><img src="<?php echo $domainurl; ?>/banners/package200x150.gif" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
              <br />
              <input type="button" value="Select Code" onclick="javascript:this.form.textarea200x150_01.focus();this.form.textarea200x150_01.select();" name="button" />
              </span>
            </form>
        </div></td>
        <td><div align="center">
            <form name="textarea" id="textarea300x225_01">
              <span class="text">
              <textarea name="textarea2" id="textarea300x225_01" cols="35" rows="5"><a href="<?php echo $link; ?>" onmouseover="window.status='Click Here To Grab Your PSDs!';return true" onmouseout="window.status='';"><img src="<?php echo $domainurl; ?>/banners/package300x225.gif" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
              <br />
              <input type="button" value="Select Code" onclick="javascript:this.form.textarea300x225_01.focus();this.form.textarea300x225_01.select();" name="button" />
              </span>
            </form>
        </div></td>
      </tr>
      <tr>
        <td><p align="center" class="text">&nbsp;</p></td>
        <td><p align="center" class="text">&nbsp;</p></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><img src="banners/package400x300_01.gif" width="400" height="300" alt="<?php echo $alt; ?>" /></div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
            <form name="textarea" id="textarea400x300_01">
              <textarea name="textarea2" id="textarea400x300_01" cols="45" rows="5"><a href="<?php echo $link; ?>" onmouseover="window.status='Click Here To Grab Your PSDs!';return true" onmouseout="window.status='';"><img src="<?php echo $domainurl; ?>/banners/package400x300.gif" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
              <br />
              <input type="button" value="Select Code" onclick="javascript:this.form.textarea400x300_01.focus();this.form.textarea400x300_01.select();" name="button" />
            </form>
        </div></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><img src="banners/package500x375_01.gif" width="500" height="375" alt="<?php echo $alt; ?>" /></div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
            <form name="textarea" id="textarea500x375_01">
              <textarea name="textarea2" id="textarea500x375_01" cols="45" rows="5"><a href="<?php echo $link; ?>" onmouseover="window.status='Click Here To Grab Your PSDs!';return true" onmouseout="window.status='';"><img src="<?php echo $domainurl; ?>/banners/package500x375.gif" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
              <br />
              <input type="button" value="Select Code" onclick="javascript:this.form.textarea500x375_01.focus();this.form.textarea500x375_01.select();" name="button" />
            </form>
        </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"><span class="text"><img src="banners/box100x100_01.gif" width="100" height="100" alt="<?php echo $alt; ?>" /></span></div></td>
        <td><div align="center"><span class="text"><img src="banners/box100x118_01.gif" width="100" height="118" alt="<?php echo $alt; ?>" /></span></div></td>
      </tr>
      <tr>
        <td><div align="center">
            <form name="textarea" id="textarea100x75_02">
              <span class="text">
              <textarea name="textarea6" id="textarea100x75_02" cols="35" rows="5"><a href="<?php echo $link; ?>" onmouseover="window.status='Click Here To Grab Your PSDs!';return true" onmouseout="window.status='';"><img src="<?php echo $domainurl; ?>/banners/box100x100_01.gif" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
              <br />
              <input type="button" value="Select Code" onclick="javascript:this.form.textarea100x75_02.focus();this.form.textarea100x75_02.select();" name="button" />
              </span>
            </form>
        </div></td>
        <td><div align="center">
            <form name="textarea" id="textarea100x100_02">
              <span class="text">
              <textarea name="textarea6" id="textarea100x100_02" cols="35" rows="5"><a href="<?php echo $link; ?>" onmouseover="window.status='Click Here To Grab Your PSDs!';return true" onmouseout="window.status='';"><img src="<?php echo $domainurl; ?>/banners/box100x118_01.gif" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
              <br />
              <input type="button" value="Select Code" onclick="javascript:this.form.textarea100x100_02.focus();this.form.textarea100x100_02.select();" name="button" />
              </span>
            </form>
        </div></td>
      </tr>
      <tr>
        <td><p align="center" class="text">&nbsp;</p></td>
        <td><p align="center" class="text">&nbsp;</p></td>
      </tr>
      <tr>
        <td><div align="center"><span class="text"><img src="banners/box150x177_01.gif" width="150" height="177" alt="<?php echo $alt; ?>" /></span></div></td>
        <td><div align="center"><span class="text"><img src="banners/box200x236_01.jpg" width="200" height="236" alt="<?php echo $alt; ?>" /></span></div></td>
      </tr>
      <tr>
        <td><div align="center">
            <form name="textarea" id="textarea200x150_02">
              <span class="text">
              <textarea name="textarea6" id="textarea200x150_02" cols="35" rows="5"><a href="<?php echo $link; ?>" onmouseover="window.status='Click Here To Grab Your PSDs!';return true" onmouseout="window.status='';"><img src="<?php echo $domainurl; ?>/banners/box150x177_01.gif" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
              <br />
              <input type="button" value="Select Code" onclick="javascript:this.form.textarea200x150_02.focus();this.form.textarea200x150_02.select();" name="button" />
              </span>
            </form>
        </div></td>
        <td><div align="center">
            <form name="textarea" id="textarea300x225_02">
              <span class="text">
              <textarea name="textarea6" id="textarea300x225_02" cols="35" rows="5"><a href="<?php echo $link; ?>" onmouseover="window.status='Click Here To Grab Your PSDs!';return true" onmouseout="window.status='';"><img src="<?php echo $domainurl; ?>/banners/box200x236_01.jpg" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
              <br />
              <input type="button" value="Select Code" onclick="javascript:this.form.textarea300x225_02.focus();this.form.textarea300x225_02.select();" name="button" />
              </span>
            </form>
        </div></td>
      </tr>
      <tr>
        <td><p align="center" class="text">&nbsp;</p></td>
        <td><p align="center" class="text">&nbsp;</p></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><img src="banners/box300x354_01.jpg" width="300" height="354" alt="<?php echo $alt; ?>" /></div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
            <form name="textarea" id="textarea400x300_02">
              <textarea name="textarea6" id="textarea400x300_02" cols="45" rows="5"><a href="<?php echo $link; ?>" onmouseover="window.status='Click Here To Grab Your PSDs!';return true" onmouseout="window.status='';"><img src="<?php echo $domainurl; ?>/banners/box300x354_01.jpg" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
              <br />
              <input type="button" value="Select Code" onclick="javascript:this.form.textarea400x300_02.focus();this.form.textarea400x300_02.select();" name="button" />
            </form>
        </div></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><img src="banners/box350x413_01.png" width="350" height="413" alt="<?php echo $alt; ?>" /></div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
            <form name="textarea" id="textarea500x375_02">
              <textarea name="textarea6" id="textarea500x375_02" cols="45" rows="5"><a href="<?php echo $link; ?>" onmouseover="window.status='Click Here To Grab Your PSDs!';return true" onmouseout="window.status='';"><img src="<?php echo $domainurl; ?>/banners/box350x413_01.png" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
              <br />
              <input type="button" value="Select Code" onclick="javascript:this.form.textarea500x375_02.focus();this.form.textarea500x375_02.select();" name="button" />
            </form>
        </div></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><a href="banners/PSDBlowoutGraphics.zip">Download All Graphics</a></div></td>
      </tr>
    </table>
    <p><img src="images/line.gif" width="700" height="20" /></p>
    <p class="disclaimer">The Publisher has strived to be as accurate and complete as possible in the creation of this report, notwithstanding the fact that he does not warrant or represent at any time that the contents within are accurate due to the rapidly changing nature of the Internet. While all attempts have been made to verify information provided in this publication, the Publisher assumes no responsibility for errors, omissions, or contrary interpretation of the subject matter herein. Any perceived slights of specific persons, peoples, or organizations are unintentional. In practical advice books, like anything else in life, there are no guarantees of income made. Readers are cautioned to reply on their own judgment about their individual circumstances to act accordingly. This book is not intended for use as a source of legal, business, accounting or financial advice. All readers are advised to seek services of competent professionals in legal, business, accounting and finance fields. ClickBank is a registered trademark of Keynetics Inc., a Delaware corporation. 'PSDBlowout' is not affiliated with Keynetics Inc. in any way, nor does Keynetics Inc. sponsor or approve any 'PSDBlowout' product. Keynetics Inc. expresses no opinion as to the correctness of any of the statements made by this site in the materials on 'PSDBlowout' Web page.</p>
                  <p class="footer">Copyright 2012. PSDBlowout. All Rights Reserved.</p>
                  <p align="center" class="footer"><a href="index.html">PSDBlowout</a> | <a href="disclaimer.html">Disclaimer</a> | <a href="terms.html">Terms</a> | <a href="privacy.html">Privacy</a></p>


</div>
</div>

<div id="footerbg">
<div id="footer">
</div></div>

</body>
</html>