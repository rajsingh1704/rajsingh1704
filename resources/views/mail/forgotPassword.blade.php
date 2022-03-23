
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
</head>
<body>

    <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0" align="left"
    valign="top" style="border-collapse: collapse; border-spacing: 0;">
      <tbody>
        <tr>
          <td align="center" valign="top" style="padding: 0;">
            {{-- <center><img src="{{ URL::to('/dist/images/logo.png')}}" alt="logo" class=" mb-2"  height="110px" width="110px"></center> --}}
            <center><img src="{{URL::to('storage/'.$details['setting']['logo']) }}" alt="logo" class=" mb-2"  height="110px" width="250px"> </center>

            <table width="600" align="center" cellpadding="0" cellspacing="0" style="border-collapse: collapse; border-spacing: 0; background-color: #F3F4F5; text-align: center;"
            border="0" valign="top" bgcolor="#F3F4F5">
              <tbody>
                <tr>
                  <td style="padding: 0;">
                    <div style="height:40px;"></div>
                  </td>
                </tr>
                <tr >
                  <td style="padding: 0;">
                    <div class="sc-bdVaJa byGfxM" display="block" style="box-sizing: border-box; position: static; border-radius: 0; -webkit-transition: all 300ms cubic-bezier(0.19, 1, 0.22, 1); transition: all 300ms cubic-bezier(0.19, 1, 0.22, 1); overflow: inherit; padding: 0rem 3rem 0rem 3rem; margin: 0rem 0rem 0rem 0rem; border-top: none; border-right: none; border-bottom: none; border-left: none; display: block;">
                    <span class="sc-bxivhb jFgvCd" color="gray1" scale="1" style="color: #052D49; font-family: America, sans-serif; -webkit-letter-spacing: inherit; -moz-letter-spacing: inherit; -ms-letter-spacing: inherit; letter-spacing: inherit; margin: 0; opacity: 1; position: relative; text-align: inherit; text-transform: inherit; text-shadow: none; -webkit-transition: all 300ms cubic-bezier(0.19, 1, 0.22, 1); transition: all 300ms cubic-bezier(0.19, 1, 0.22, 1); -webkit-user-select: inherit; -moz-user-select: inherit; -ms-user-select: inherit; user-select: inherit; font-size: 1rem; font-weight: 400; line-height: 1.5;">
                    <div class="sc-kgoBCf kktUDF" overflow="hidden" style="border-top: none; border-bottom: none; border-left: none; border-right: none; border-radius: 0; box-shadow: 0 2px 0 0 rgba(5, 45, 73, 0.06999999999999995); background-color: #FFFFFF; overflow: hidden;">
                    <div class="sc-bdVaJa jlPFGn" display="block" style="box-sizing: border-box; position: static; border-radius: 0; -webkit-transition: all 300ms cubic-bezier(0.19, 1, 0.22, 1); transition: all 300ms cubic-bezier(0.19, 1, 0.22, 1); overflow: inherit; padding: 2rem 2rem 2rem 2rem; margin: 0rem 0rem 0rem 0rem; border-top: none; border-right: none; border-bottom: none; border-left: none; display: block;">
                    <div class="sc-htpNat cpoSvg" color="gray1" scale="1" style="color: #052D49; font-family: America, sans-serif; -webkit-letter-spacing: inherit; -moz-letter-spacing: inherit; -ms-letter-spacing: inherit; letter-spacing: inherit; margin: 0; opacity: 1; position: relative; text-align: left; text-transform: inherit; text-shadow: none; -webkit-transition: all 300ms cubic-bezier(0.19, 1, 0.22, 1); transition: all 300ms cubic-bezier(0.19, 1, 0.22, 1); -webkit-user-select: inherit; -moz-user-select: inherit; -ms-user-select: inherit; user-select: inherit; font-size: 1rem; font-weight: 400; line-height: 1.5;">
                    <span class="sc-bxivhb eWjzRU" color="gray3" scale="1" size="2" style="color: #4F687A; font-family: America, sans-serif; -webkit-letter-spacing: inherit; -moz-letter-spacing: inherit; -ms-letter-spacing: inherit; letter-spacing: inherit; margin: 0; opacity: 1; position: relative; text-align: inherit; text-transform: inherit; text-shadow: none; -webkit-transition: all 300ms cubic-bezier(0.19, 1, 0.22, 1); transition: all 300ms cubic-bezier(0.19, 1, 0.22, 1); -webkit-user-select: inherit; -moz-user-select: inherit; -ms-user-select: inherit; user-select: inherit; font-size:15px; font-weight: 400; line-height: 1.25;">
                    </span>
                      <div
                      class="sc-bdVaJa dggHpc"  display="block" style="box-sizing: border-box; position: static; border-radius: 0; -webkit-transition: all 300ms cubic-bezier(0.19, 1, 0.22, 1); transition: all 300ms cubic-bezier(0.19, 1, 0.22, 1); overflow: inherit; padding: 0rem 0rem 0rem 0rem; margin: 1.5rem 0rem 1.5rem 0rem; border-top: none; border-right: none; border-bottom: none; border-left: none; display: block;">
                      <p style="font-size:13px;">
                        Dear {{$details['userDetails']['name']}},You have requested to reset your password. Use the given link to reset it. If not requested, kindly ignore this email. &nbsp;<span style="color:red;">
                            <a href="{{URL::to('admin/resetPassword/'.$details['resetToken']['reset_token']) }}" style="text-decoration: none; color:#fff !important;">
                                <br><br><button style="background-color: blue; color:#fff !important; padding:10px; text-align:center; border-radius:5px; width:100%">Click here</button></a></span> 
                      </p>
                      Regards<br/>
                      Team {{$details['setting']['system_name']}}
                    </div>
                    <hr>
                    <div>
                      <p style="font-size:11px; font-style:italic">This is a system generated email, please don’t
                        reply this email. If you have not submitted this request kindly ignore
                        this email.</p>
                    </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                      <div style="height:40px;"></div>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
</body>
</html>