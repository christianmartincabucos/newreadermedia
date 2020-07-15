<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Grids Master Template</title>

  <style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:300');
    /* Outlines the grids, remove when sending */
    table td { border: 1px solid cyan; }
    /* CLIENT-SPECIFIC STYLES */
    body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
    table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
    img { -ms-interpolation-mode: bicubic; }
    /* RESET STYLES */
    img { border: 0; outline: none; text-decoration: none; }
    table { border-collapse: collapse !important; }
    body { margin: 0 !important; padding: 0 !important; width: 100% !important; }
    /* iOS BLUE LINKS */
    a[x-apple-data-detectors] {
      color: inherit !important;
      text-decoration: none !important;
      font-size: inherit !important;
      font-family: inherit !important;
      font-weight: inherit !important;
      line-height: inherit !important;
    }
    /* ANDROID CENTER FIX */
    div[style*="margin: 16px 0;"] { margin: 0 !important; }
    /* MEDIA QUERIES */
    @media all and (max-width:639px){ 
      .wrapper{ width:320px!important; padding: 0 !important; }
      .container{ width:300px!important;  padding: 0 !important; }
      .mobile{ width:300px!important; display:block!important; padding: 0 !important; }
      .img{ width:100% !important; height:auto !important; }
      *[class="mobileOff"] { width: 0px !important; display: none !important; }
      *[class*="mobileOn"] { display: block !important; max-height:none !important; }
    }

    div.box-content {
      margin:20px;
    }
  </style>    
</head>
<body style="margin:0; padding:0; background-color:#F2F2F2;">
  
  <span style="display: block; width: 640px !important; max-width: 640px; height: 1px" class="mobileOff"></span>
  
  <center>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#F2F2F2">
      <tr>
        <td align="center" valign="top">
            
          <table width="640" cellpadding="0" cellspacing="0" border="0" class="wrapper" bgcolor="#FFFFFF">
            <tr>
              <td height="10" style="font-size:10px; line-height:10px;"><img src="{{{ url('storage/newsletter/header.png') }}}" alt="" style="width:100%"></td>
            </tr>
            <tr>
              <td align="center" valign="top">

                <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
                  <tr>
                    <td align="center" valign="top" style="background:#fff">
                      {{-- Grid One --}}
                      Grid One
                    </td>
                  </tr>
                </table>

              </td>
            </tr>
            <tr>
              <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
            </tr>
          </table>

          <table width="640" cellpadding="0" cellspacing="0" border="0" class="wrapper" bgcolor="#FFFFFF">
            <tr>
              <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" valign="top">

                <table width="640" cellpadding="0" cellspacing="0" border="0" class="container">
                  <tr>
                    <td width="300" class="mobile" align="center" valign="top">
                      {{-- Grid Two --}}
                      <div class="box-content">
                          <img src="{{{ url('storage/services/bsd3.jpg') }}}" style="width:100%">
                          <p style="font-family:'Raleway', sans-serif;color:#222;text-align:justify"><small>In this modern digital age, books are created into audiobooks or converted digitally into e-books for people to read in their own respective smart devices. Not to mention the significant rise of online shopping that delivers your book to your doorstep astoundingly fast.</small></p>
                      </div>
                      
                      
                    </td>
                    <td width="300" class="mobile" align="center" valign="top">
                      {{-- Grid Two --}}
                      <div class="box-content">
                          <img src="{{{ url('storage/services/bsd3.jpg') }}}" style="width:100%">
                          <p style="font-family:'Raleway', sans-serif;color:#222;text-align:justify"><small>In this modern digital age, books are created into audiobooks or converted digitally into e-books for people to read in their own respective smart devices. Not to mention the significant rise of online shopping that delivers your book to your doorstep astoundingly fast.</small></p>
                      </div>
                    </td>
                  </tr>
                </table>

              </td>
            </tr>
            <tr>
              <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
            </tr>
          </table>

          <table width="640" cellpadding="0" cellspacing="0" border="0" class="wrapper" bgcolor="#FFFFFF">
            <tr>
             <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" valign="top">

                <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
                  <tr>
                      <td width="200" class="mobile" align="center" valign="top">
                        Grid Three
                      </td>
                      <td width="200" class="mobile" align="center" valign="top">
                        Grid Three
                      </td>
                      <td width="200" class="mobile" align="center" valign="top">
                        Grid Three
                      </td>
                  </tr>
                </table>

              </td>
            </tr>
            <tr>
              <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
            </tr>
          </table>

          <table width="640" cellpadding="0" cellspacing="0" border="0" class="wrapper" bgcolor="#FFFFFF">
            <tr>
              <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" valign="top">

                <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
                  <tr>
                    <td width="150" class="mobile" align="center" valign="top">
                      Grid Four
                    </td>
                    <td width="150" class="mobile" align="center" valign="top">
                      Grid Four
                    </td>
                    <td width="150" class="mobile" align="center" valign="top">
                      Grid Four
                    </td>
                    <td width="150" class="mobile" align="center" valign="top">
                      Grid Four
                    </td>
                  </tr>
                </table>

              </td>
            </tr>
            <tr>
              <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
            </tr>
          </table>

          <table width="640" cellpadding="0" cellspacing="0" border="0" class="wrapper" bgcolor="#FFFFFF">
            <tr>
              <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" valign="top">

                <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
                  <tr>
                    <td width="120" class="mobile" align="center" valign="top">
                      Grid Five
                    </td>
                    <td width="120" class="mobile" align="center" valign="top">
                      Grid Five
                    </td>
                    <td width="120" class="mobile" align="center" valign="top">
                      Grid Five
                    </td>
                    <td width="120" class="mobile" align="center" valign="top">
                      Grid Five
                    </td>
                    <td width="120" class="mobile" align="center" valign="top">
                      Grid Five
                    </td>
                  </tr>
                </table>

              </td>
            </tr>
            <tr>
              <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
            </tr>
          </table>
            
          <table width="640" cellpadding="0" cellspacing="0" border="0" class="wrapper" bgcolor="#671716">
            <tr>
              <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" valign="top">

                <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
                  <tr>
                    <td align="center" valign="top" style="">
                      {{-- Grid One --}}
                      <p>
                        <a href="" target="_blank"><img src="{{{ url('storage/newsletter/twitter.png') }}}" style="height:30px"></a>
                        <a href="" target="_blank"><img src="{{{ url('storage/newsletter/fb.png') }}}" style="height:30px"></a>
                        <a href="" target="_blank"><img src="{{{ url('storage/newsletter/ig.png') }}}" style="height:30px"></a>
                      </p>
                      <p style="font-family:'Oswald', sans-serif;color:#fff;text-align:center">CONTACT US</p>
                      <p style="font-family:'Raleway', sans-serif;color:#fff;text-align:center"><small>100 Church Street, Suite 800 New York, NY 10007, USA<br>1 800-734-7871<br>conact@newreadermagazine.com</small></p>

                      <p style="font-family:'Oswald', sans-serif;color:#fff;text-align:center"><small><a href="http://" target="_blank" style="color:#fff">unsubscribe</a></small></p>
                    </td>
                  </tr>
                </table>

              </td>
            </tr>
            <tr>
              <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>
