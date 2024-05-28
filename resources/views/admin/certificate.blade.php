@extends('admin.main.main')

@section('admin-content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download Certificate</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>


  <style>
    .first_div {
      display: flex;
    }

    .col_first_img {
      width: 20%;
    }

    .report_text_co {
      width: 50%;
    }

    .certificate_report {
      width: 50%;
    }

    img.img_qr {
      width: 80%;
    }

    .about_section_text p,
    .about_section_text span {

      line-height: 24px;

    }

    .fight_side_co {
      text-align: center;
    }

    .mai_div_right_top {
      display: flex;
      align-items: center;
      /* justify-content: center; */
    }

    .text_right_litel {
      font-size: 8px;
    }

    p.report_text {
      margin-bottom: 10px;
      font-size: 20px;
    }

    .col-7.right_div {
      width: 67%;
    }

    .col-5.left_div {
      width: 37%;
    }

    .article-footer-cta {
      background: #ccdcd3;
      padding: 30px 40px;
      border-radius: 10px;
    }

    .btn_sum_dow {
      background-color: #d19e28 !important;
      color: white;
      font-weight: 400;
      border-radius: 20px;
      padding: 8px 16px;
      width: 110px;
    }


    .img_left img {
      width: 100px;
      height: 100px;
    }

    .para_headi {
      color: rgb(163, 173, 172);
      font-size: 18px !important;
      font-size: 600;
      padding: 5px 0px;
    }


    .left_container {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    img.img_qr {
      width: 80%;
      margin-top: 60px;
    }


    img.img_qr_top {
      width: 38%;
      margin-top: 3px;
    }



    .row_wraper {
      display: flex;
      justify-content: space-between;
    }

    .red_text {
      color: red;

    }

    .text_right_litel {
      font-size: 10px;
    }

    .report_text {
      font-size: 12px;
      font-weight: 600;
      text-decoration: underline;
      text-underline-offset: 5px;
    }

    .certificate_report_text {
      font-size: 11px;
      font-weight: 600;
    }

    .report_text_co {
      display: flex;
      flex-direction: column;
    }

    .certificate_no_report {
      display: flex;
      margin-top: 2px;
    }

    .Img_dynamic {
      width: 100px;
      height: 100px;
      margin-top: 10px;
    }

    .bottom_text_span_text_li {
      color: blue;
      font-size: 15px;
      font-weight: 600;
      padding-top: 10px;
    }

    .bottom_text_span_text_li_left {
      color: blue;
      font-size: 15px;
      font-weight: 600;
      margin-top: 100px;
    }

    .bottom_text_span_text_li ul {
      padding: 10px 15px;
    }

    .img_wraper {
      width: 140px;
      height: 100%;
      margin-right: -20px;
    }

    .report_text_head {
      font-size: 24px;
      font-weight: 600;
      padding-bottom: 12px;
    }

    .report_text_certifi {
      /* font-size: 12px; */
      font-weight: 700;
      background: lightgrey;
      border-radius: 10px;
      font-weight: 500;
      font-size: 20px;
      padding: 4px;
      width: 70%;
      margin-left: -10px;
      font-family: emoji;

    }

    p.text_para_litel {
      padding-left: 45px;
      font-weight: 500;
      color: blue;
      padding-top: 7px;
    }

    .img_sin {
      height: 150px;
      height: 69px;
    }

    .secod_div span {
      display: flex;
    }


    /* second page css */
    .about_section_text {
      padding: 30px;
    }

    .cgiHed {
      margin-left: 150px;
    }

    .cgitext {
      color: green;
      font-size: 16px;
      font-family: "emoji";
      font-weight: 500;
      display: block;
      padding-left: 5px;
    }

    .col_first_img p {
      color: green;
      font-size: 16px;
      font-family: "emoji";
      font-weight: 500;
    }

    .Website_link p {
      color: blue;
      font-weight: 600;
    }
  </style>

</head>
<body>


        <button class="btn btn-info" onclick="downloadCertificate('certificateDetails')" style="float:right; mr-10px">Download Certifiacte Pdf</button>



        <div id="certificateDetails">

            <section class="about_section_mg layout_padding-x">
              <div class="container-fluid about_section_text">
                <div class="d-flex">
                  <div class="col-12 right_div">
                    <div class="mai_div_right_top">
                      <div class="img_div">
                        <!-- <img class="img_wraper" src="logo-o-KEmmS_.png" alt="img" /> -->
                        <img class="img_wraper" src="{{asset('assets/admin/img/logo-o-KEmmS_.png')}}" alt="img" />
                      </div>
        
                      <div class="fight_side_co">
                        <h3 class="report_text_head">Gurgaon Gems Institute</h3>
                        <span class="report_text_certifi">CERTIFICATE OF AUTHENTICATION</span>
        
                        <p class="text_para_litel">The Information contained in this reflects the results
                          obtained at the time<br /> of issue. to the best of our knowledge
                          and ability the specimen submitted<br /> for examaination is
                          identified as -
                        </p>
                      </div>
                    </div>
        
                    <div class="container secod_div ">
                      <div class="row">
                        <div class="col-6 certificate_report ">
                          <p class="report_text">Gemstone Analysis Report</p>
                          <table>
                            <tr>
                              <td className="tr_td" >Certificate No.&nbsp;</td>
                              <td className="tr_td" > :&nbsp; {{$user->certificate_no}}</td>
                            </tr>
                            <tr>
                              <td className="tr_td" >Species&nbsp;</td>
                              <td className="tr_td" > :&nbsp; {{$user->gemstone}}</td>
                            </tr>
                            <tr>
                                   <td className="tr_td" > Weight&nbsp;</td>
                              <td className="tr_td" > :&nbsp; {{$user->weight}}</td>
                            </tr>
                            <tr>
                              <td className="tr_td" >Cut&nbsp;</td>
                              <td className="tr_td" > :&nbsp; {{$user->cut}}</td>
                            </tr>
                            <tr>
                              <td className="tr_td" >Dimensions&nbsp;</td>
                              <td className="tr_td" > :&nbsp; {{$user->dimension}}</td>
                            </tr>
                            <tr>
                              <td className="tr_td" >Clarity&nbsp;</td>
                              <td className="tr_td" > :&nbsp; {{$user->clarity}}</td>
                            </tr>
                            <tr>
                              <td className="tr_td" >Shape&nbsp;</td>
                              <td className="tr_td" > :&nbsp; {{$user->shape}}</td>
                            </tr>
                            <tr>
                              <td className="tr_td" >Color&nbsp;</td>
                              <td className="tr_td" > :&nbsp;    {{$user->colour}}</td>
                            </tr>
                          </table>
        
                          <div class="bottom_text_span_text_li">
                            <ul>
                              <li>Jewellery image may be enhanced or approximate</li>
                              <li>As given by supplier / inscribed on jewellery</li>
        
                            </ul>
                          </div>
        
                        </div>
                        <div class="col-6">
                          <p class="OR_Text">Certificate : {{$user->certificate_no}}</p>
                          <img class="img_qr_top" src="{{ $user->file }}" alt="" />
        
        
                          <p class="bottom_text_span_text_li mt-4 pt-4">Approx. Digital Photo. Magnification 1x</p>
        
                        </div>
        
                      </div>
                    </div>
                  </div>
            </section>
          </div>

          <button class="btn btn-info" onclick="downloadReportCertificate ('reporlist')"
          style="float:right; margin-right: 10px;"> Download Report Pdf </button>
      
        <section id="reporlist" class="about_section_mg layout_padding-x">
          <div class="container-fluid about_section_text">
            <div class="d-flex">
              <div class="col-12 left_div">
                <div class="first_div row">
      
                  <div class="col-4 col_first_img">
                    <!-- <img class="img_qr" src="gemstoneOr-s48cmEXZ.png" alt="" /> -->
                    <img class="img_qr" src="{{asset('assets/admin/img/gemstoneOr-s48cmEXZ.png')}}" alt="" />
                    <p class="OR_Text">Verify Your Certificate</p>
                  </div>
                  <div class="col-6 col_first">
                    <div class="col_first cgiHed">
                      <h3 class="cgl_text">
                        For <strong class="Gci_heading"> GCI</strong>
                      </h3>
                      <!-- <img src="backimgwhite.png" class="img_sin" /> -->
                      <img src="{{asset('assets/admin/img/backimgwhite.png')}}" class="img_sin" />
                    </div>
                    <div class="cgitext">
                      <span class="text_left_span_bottom">(CHIEF GEMMOLOGIST & DEP.DIRECTOR)</span>
                      <p class="p_zayn">P. Zayn. Msc,</p>
                      <span class="text_left_span">DIP. Gemmology (IGI), D.G. (GIA, IGI)</span>
                      <span class="text_left_span">Adv. Gemm. (1.1.G.J-G.T.L., Jaipur)</span>
                      <span class="text_left_span">Rough Gem ID (L.I.G.J-G.T.L., Jaipur)</span>
                      <span class="text_left_span">Pearl Grading & Jewellery Essensials(GIA)</span>
                      <p class="textinter_regis">Internationally registered lab.</p>
      
                    </div>
                  </div>
                </div>
      
                <p class="red_text">
                  ISO-ACCREDITED BY JOINT ACCREDITATION SYSTEM OF AUSTRALIA &
                  NEWZEALAND (JAS-ANZ)
                </p>
                <div class=" Website_link py-2">
                  <p class="txt_Blue">
                    https://www.gemstonecertificationinstitute.com
                  </p>
                  <p class="txt_Blue">
      
                    mailto:info@gemstonecertificationinstitute.com
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>


  <script>
    async function downloadCertificate(elementId) {
      const element = document.getElementById(elementId);

      // Configure the options for html2pdf
      const options = {
        filename: 'certificate.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
      };

      // Use html2pdf to generate PDF from HTML element
      await html2pdf().from(element).set(options).save(); 
    }

    //  repost downlod 

    async function downloadReportCertificate(elementId) {
      const element = document.getElementById(elementId);

      // Configure the options for html2pdf
      const options = {
        filename: 'certificate.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
      };

      // Use html2pdf to generate PDF from HTML element
      await html2pdf().from(element).set(options).save();
    }

  </script>
       
</body>
</html>

@endsection

