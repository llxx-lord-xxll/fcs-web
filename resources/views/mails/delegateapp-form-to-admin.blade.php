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
                                <td style="word-break:break-all;font-size:0px;padding:10px 25px;" align="left"><div class="" style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;">
                                        <p> The delegate application form submission contains following data:, </p>
                                        <p><br>
                                            <b>IP Address: </b><br>{{$request->ip()}}<br>
                                            <b>Saluation: </b><br>{{$request->input('salutation')}}<br>
                                            <b>First Name: </b><br>{{$request->input('first_name')}}<br>
                                            <b>Last Name: </b><br>{{$request->input('last_name')}}<br>
                                            <b>Preferred Name: </b><br>{{$request->input('full_name')}}<br>
                                            <b>Nationality: </b><br>{{$request->input('choose_country')}}<br>
                                            <b>City: </b><br>{{$request->input('city_name')}}<br>
                                            <b>Occupation: </b><br>{{$request->input('occupation')}}<br>
                                            <b>University: </b><br>{{$request->input('university-name')}}<br>
                                            <b>Company / Organisation: </b><br>{{$request->input('company-organization')}}<br>
                                            <b>Ministry And Department: </b><br>{{$request->input('ministry-department')}}<br>
                                            <b>Email: </b><br>{{$request->input('email_address')}}<br>
                                            <b>Phone: </b><br>{{$request->input('phone_number')}}<br>
                                            <b>Facebook: </b><br>{{$request->input('delegate-social-fb')}}<br>
                                            <b>LinkedIn: </b><br>{{$request->input('delegate-social-li')}}<br>
                                            <b>Scholarhub: </b><br>{{$request->input('delegate-social-sh')}}<br>
                                            <b>Projects / Startups / Ventures: </b><br> @if($pitching_deck !== null) <a href="http://futurecitysummit.org/uploads/pitching-decks/{{$pitching_deck}}">{{$pitching_deck}}</a> @else null @endif <br>
                                            <b>Purpose: </b><br>{{$request->input('fcs-purpose')}}<br>
                                            <b>One Stressing Socio-Economic Issue: </b><br>{{$request->input('delegate-city-message')}}<br>
                                            <b>Interested To Participate: </b><br>{{$request->input('track-conference')}}<br>
                                            <b>Belong To Any Chapters Of FCS?: </b><br>{{$request->input('fcs-chapter-referral')}}<br>
                                            <b>Referred By: </b><br>{{$request->input('referred-person')}}<br>
                                            <b>Apply For Scholarship?: </b><br>{{$request->input('fcs-scholarship')}}<br>
                                            <b>Subscribe To Future City Summit Newsletter?: </b><br>{{$request->input('fcs-newsletter-subscription')}}<br>
                                        </p>
                                    </div></td>
                            </tr>
                            <tr>
                                <td style="word-break:break-word;font-size:0px;padding:10px 25px;" align="left"><div class="" style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;">
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