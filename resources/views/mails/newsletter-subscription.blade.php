@extends('layouts.mail')

@section('message')
    <div style="margin:0px auto;max-width:600px;background:#fff;">
        <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;background:#fff;" align="center" border="0">
            <tbody>
            <tr>
                <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:20px 0px;"><!--[if mso | IE]>
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td style="vertical-align:top;width:600px;">
                    <![endif]-->

                    <div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
                        <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                            <tbody>
                            <tr>
                                <td style="word-break:break-word;font-size:0px;padding:10px 25px;" align="left"><div class="" style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;">
                                        <p> Dear  {{$request->input('myname')}},</p>
                                        <p><br>
                                            Thank you for subscribing to the newsletter program. <br>
                                            Future City Summit strives to provide the best and accurate information for your business and policy development needed in the city. Stay close with us and reach us <a href="community@futurecitysummit.org">community@futurecitysummit.org</a> should you have any inquiries from collaboration to engagement in any ongoing projects.  </p>

                                        <p>Here a toast for future city.</p>


                                    </div></td>
                            </tr>
                            <tr>
                                <td style="word-break:break-word;font-size:0px;padding:10px 25px;" align="left"><div class="" style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;">
                                        <p>Best Regards,</p>
                                        <p> FCS Community Team</p>
                                    </div></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <!--[if mso | IE]>
                    </td></tr></table>
                    <![endif]--></td>
            </tr>

            </tbody>
        </table>
    </div>
@endsection

@section('footer')
    <div class="" style="cursor:auto;color:#858585;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:12px;line-height:22px;text-align:center;">If you don't want to receive newsletter, <a href="{{$link}}">tap here</a> <br>
    </div>
    @endsection