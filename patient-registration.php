<!DOCTYPE html>
<html lang="en">

<head>
     <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-C50FN671CK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-C50FN671CK');
</script>
<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "redd6ryv87");
</script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="2nDrO - Medical Healthcare">
  <title>When it matters the most</title>
  <?php include('css-scripts.php'); ?>
  
</head>
<body>
  
  <?php include('header.php');?>

  <!-- ========================
       page title 
    =========================== -->
  <section class="page-title page-title-layout5">
    <div class="bg-img"><img src="assets/images/backgrounds/6.jpg" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-12 d-flex justify-content-between flex-wrap align-items-center">
          <h1 class="pagetitle__heading my-3">Patient Registration - INR. 500 Only</h1>
          <nav>
            <ol class="breadcrumb my-3">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Patient Registration</li>
            </ol>
          </nav>
        </div><!-- /.col-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

  <!-- ==========================
        contact layout 2
    =========================== -->
  <section class="contact-layout2 mt--50 pt-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
          <div class="contact-panel ">
            <form class="" method="post" action="assets/php/contact.php" id="contactForm">
              <div class="row">
                <div class="col-sm-12">
                  <h4 class="contact-panel__title">Patient Registration</h4>
                  <p class="contact-panel__desc mb-30">This page is dedicated to the entire process of online consultation.<br />It is VERY important to understand this. We have done our best to explain the process but if there are any queries, go to FAQs and if your query is not answered in the FAQs, please do not hesitate to write to us on <a href="mailto:info@2ndro.com">info@2ndro.com</a>.

                  </p>
                </div>
                <!-- <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <i class="icon-news form-group-icon"></i>
                    <input type="text" class="form-control" placeholder="Patient Name" id="patient-name" name="patient-name"
                      required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <i class="icon-widget form-group-icon"></i>
                    <select class="form-control" id="patient-gender" name="patient-gender" required>
                      <option value="0">Choose Gender</option>
                      <option value="1">Male</option>
                      <option value="2">Female</option>
                      <option value="3">Other</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group form-group-date">
                    <i class="icon-calendar form-group-icon"></i>
                    <input type="date" class="form-control" id="patient-dob" name="patient-dob" onChange="calculateAge()" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <i class="icon-news form-group-icon"></i>
                    <input type="text" class="form-control" placeholder="Age (in years)" id="patient-age" name="patient-age" readonly="true" required>
                  </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <i class="icon-location form-group-icon"></i>
                    <textarea  rows="4" class="form-control" placeholder="Address" id="patient-address" name="patient-address" ></textarea>
                  </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <i class="icon-email form-group-icon"></i>
                    <input type="email" class="form-control" placeholder="Email" id="patient-email" name="patient-email" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <i class="icon-phone form-group-icon"></i>
                    <input type="text" class="form-control" placeholder="Mobile No." id="patient-mobile"
                      name="patient-mobile" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <i class="fa fa-globe form-group-icon"></i>
                    <input type="text" class="form-control" placeholder="Languages Spoken" id="patient-languages"
                      name="patient-languages" required>
                  </div>
                </div>/.col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <label class="checkbox">I have read the <a class="action__btn action__btn-login open-login-popup" href="registration-terms-and-condition.php">terms and conditions</a>. I have understood the limitations of online consultation and hereby give my explicit consent to proceed.
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div><!-- /.col-lg-6 -->
                
                
                <div class="col-12">
                  <button type="submit" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                    <span>Register </span> <i class="icon-arrow-right"></i>
                  </button>
                  <div class="contact-result"></div>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
            </form>
           
          </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">

          <div class="contact-panel ">
            <h4 class="contact-panel__title">How will video-consultation work?</h4>
            <p class="contact-panel__desc mb-30"><strong>Before Video-Consultation</strong>
                  </p>
            <div class="timeline-wrapper mb-60">
              <!-- Timeline Item #1 -->
              <div class="timeline-item d-flex">
                <span class="timeline__year">1</span>
                <div class="timeline__body">
                  <!-- <h4 class="timeline__title">Royal College of Surgeons of Harvard</h4> -->
                  <p class="timeline__desc mb-0">Register with IBHL.
                  </p>
                </div><!-- /.timeline__body -->
              </div><!-- /.timeline-item -->
              <!-- Timeline Item #2 -->
              <div class="timeline-item d-flex">
                <span class="timeline__year">2</span>
                <div class="timeline__body">
                  
                  <p class="timeline__desc mb-0">Upload all documents and WAIT until we give you a green signal. This is for your 
                  benefit.</p>
                </div><!-- /.timeline__body -->
              </div><!-- /.timeline-item -->
              <!-- Timeline Item #3 -->
              <div class="timeline-item d-flex">
                <span class="timeline__year">3</span>
                <div class="timeline__body">
                 
                  <p class="timeline__desc mb-0">Our in-house physician goes through the uploaded documents and tests. They will 
organize this properly. If any information is missing, our in-house physician will 
contact you and ask you to provide the missing information.</p>
                </div><!-- /.timeline__body -->
              </div><!-- /.timeline-item -->
              <!-- Timeline Item #4 -->
              <div class="timeline-item d-flex">
                <span class="timeline__year">4</span>
                <div class="timeline__body">
                 
                  <p class="timeline__desc mb-0">Once all the information is in order, our in-house physician will send you a text 
message to book an appointment for a second opinion with one of the expert doctors 
on our panel. They may recommend a doctor, but you may choose a doctor of your 
choice</p>
                </div><!-- /.timeline__body -->
              </div><!-- /.timeline-item -->
              <!-- Timeline Item #5 -->
              <div class="timeline-item d-flex">
                <span class="timeline__year">5</span>
                <div class="timeline__body">
                 
                  <p class="timeline__desc mb-0">Remember, if you decide to book consultation for second opinion without waiting for 
a green signal from our in-house physician, you may not receive the correct help 
from us.</p>
                </div><!-- /.timeline__body -->
              </div><!-- /.timeline-item -->
            </div>
          </div>
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.contact layout 2 -->
    
  <?php include('footer.php');?>
  
   <div class="login-popup" id="login-popup">
      <div class="login-popup-wrapper login-popup__form">
        <h3 class="login-popup__title">Terms and Conditions</h3>
          <p class="login-popup__desc"><strong>Telemedicine Consultation - Patient’s Consent</strong></p>
          <p class="login-popup__desc" style="color:#f00"><strong>(Patient or their carer or next of kin, as the case may be, must read and understand the following terms and conditions prior to initiation of a Telemedicine Consultation. The explicit consent is deemed to have been given by ticking the box placed at the end of these terms.)</strong></p>
          <ul class="list-items list-unstyled mb-60 pl-40">
            <li>I hereby confirm that I have (i) read and understood or (ii) my carer or next of kin has read and explained to me the below-mentioned terms and conditions (hereinafter referred to as the “T&amp;C”), which is required to be read, understood and accepted by me {in pursuance of the Telemedicine Guidelines (as defined herein below)}, prior to initiation of a telemedicine consultation.</li>

            <li>Definitions:
              <ul>
                  <li>&quot;Carer&quot; or “Next of Kin” means and includes a family member, or any person authorized by the Patient to represent the Patient. “Health Worker” means and includes a nurse, allied health professional, mid-level health provider, or any other health worker or any nominated member designated by an appropriate authority, and who is involved in caring for the patient.</li>
                  <li>"IBHL" means Inmed Bharat Health Care Private Limited.</li>
                  <li>"Patient" shall mean the person whose health-related consultation is requested and whose name and details are included in the registration form for the second opinion via a Telemedicine consultation.</li>
                  <li>"Registered Medical Practitioner" or "RMP" means a person who is enrolled in the State Register or the current National Medical Register under the Indian Medical Council Act 1956, or is registered under the National Medical Commission (NMC) Act 2019 and is a consultant practicing in India.</li>
                  <li>"Telemedicine" means the delivery of health-care services, where distance is a critical factor, by all health-care professionals using information and communications technologies for the exchange of valid information for diagnosis, treatment, and prevention of disease and injuries, research and evaluation, and the continuing education of health-care workers, with the aim of advancing the health of individuals and communities.</li>
                  <li>"TM Guidelines" means the “Telemedicine Practice Guidelines” issued in March 2020 by the Board of Governors of the Medical Council of India, as may be amended from time to time. <a href="https://irdai.gov.in/document-detail?documentId=394669" target="_blank">https://irdai.gov.in/document-detail?documentId=394669</a></li>
                  <li>"TM Communication" means and includes all channels of communication with the Patient that leverage Information Technology platforms, including voice, audio, text &amp; digital data exchange, e.g. telephone, video, devices connected over LAN, WAN, internet, mobile or landline phones, chat platforms like WhatsApp, Facebook Messenger, etc., or mobile applications or internet-based digital platforms for Telemedicine or data transmission systems, like skype or email or fax etc.</li>
                  <li>Virtual consultation means any form of consultation other than face-to-face communication. This includes and is not limited to communications via telephone, mobile, internet, or any other means that facilitates the exchange of information between the RMP and the patient or carer or next of kin for the benefit of the patient.</li>
              </ul>
            </li>
            <li>I am above 18 years of age, of sound mind, and I am competent to consult an RMP / I am a minor below the age of 18 years, of sound mind and I am consulting an RMP along with a consenting adult, who is above 18 years of age and with sound mind.</li>
            <li>By accepting these T&amp;Cs and executing this Patient consent form, I agree to a medical consultation via a TM Communication and I hereby confirm that I have the legal right and ability to accept these T&amp;Cs.</li>
            <li>I am residing in India, and I undertake that my TM Communication form Telemedicine will originate from a place within India and not from any other place outside India.</li>
            <li>I agree and confirm that the Hospital and/or the RMP will need to verify and confirm my identity (and the identity of any adult accompanying me, including a Carer or Health Worker) and my and, their name, age, address, email ID, phone number, registered ID or any other identification as may be deemed appropriate. I further confirm to provide the IBHL and/or the RMP any additional proof that they may require, as they deem appropriate.</li>
            <li>I undertake that all information that is provided to the IBHL and/or the RMP will be complete and valid information and nothing will be misstated, withheld, or false.</li>
            <li>I further understand, agree, and confirm that a virtual consultation via Telemedicine, involving TM Communication, may necessitate the transmission of video or digital photographs of me, or the electronic transfer of my medical records, by the IBHL and/or the RMP deem fit (at their sole discretion) and which I hereby absolutely agree to.</li>
            <li>I understand, agree, and confirm that the information required to be furnished by me may vary from one RMP to another, based on his/her professional experience and discretion and having regard to different medical conditions, based on the defined clinical standards and standard treatment guidelines, and I hereby agree to furnish whatever information is required in this regard.</li>
            <li>I understand, agree, and confirm that my records, reports, documents, images, diagnostics, data, etc. (digital or non-digital) utilized in/during the virtual consultation via Telemedicine will be retained by the RMP and/or the Hospital and I agree that I have no objection to the same.</li>
            <li>11. I understand, agree, and confirm that virtual consultation via Telemedicine is limited to providing consultation, counselling, or advice based on the information provided by the patient, carer, or next of kin and is NOT for any medical emergencies, life-threatening conditions or for Patients requiring acute care.</li>
            <li>I understand, agree, and confirm that virtual consultation is not suitable for physical body examination and is not ideal for visual interpretation of clinical signs (for example skin rash or colour of eyes, etc.) or looking deep into your body parts such as throat, nose, inner parts of the eyes, ears, etc.</li>
            <li>I understand and agree that NO private parts of my body will be exposed during virtual consultation without my explicit WRITTEN consent and ONLY in the presence of a designated chaperone. I have read the requirements of a <a href="" target="_blank">chaperone policy</a>.</li>
            <li>I further understand, agree, and confirm that if a physical examination, is critical information for a consultation, the RMP will:
              <ul>
                  <li>Proceed with the virtual consultation via Telemedicine based on the information available at that time.</li>
                  <li>You agree to a second consultation after you have been physically examined through an in-person consultation.</li>
                  <li>I understand, agree, and confirm that another fee will be payable for the second consultation.</li>
              </ul>

            </li>
            <li>I further understand, agree, and confirm that if any tests are required, I will, at my discretion
              <ul>
                  <li>Agree to get those tests done</li>
                  <li>Agree to book another consultation.</li>
                  <li>I understand, agree, and confirm that another fee will be payable for the second consultation.</li>
              </ul>
            </li>
            <li>I understand, agree, and confirm that an RMP, after considering the situation and using his/her best judgment, is entitled to decide on the best tool for TM Communication and I agree to abide by the decision of the RMP.</li>
            <li>I understand, agree, and confirm that during a virtual consultation via Telemedicine, an RMP may seek the assistance of other physicians/ trained nurses closer to your place of consultation and I hereby agree to the same.</li>
            <li>I understand, agree, and confirm that my information will be shared with other persons working within IBHL, in relation to scheduling and billing purposes.</li>
            <li>I understand, agree, and confirm that an RMP shall have the final discretion on whether he/she can prescribe or diagnose by way of a virtual consultation via Telemedicine (based on the information available via the virtual consultation) or not. I further agree that the determination of the RMP is final, and I agree to abide by the same.</li>
            <li>I understand, agree, and confirm that the diagnosis or prescription provided by the RMP will be solely based on the declaration/information given by me (during the Telemedicine consultation, and in the form of patient notes or documents uploaded and provided by me). If I provide any inaccurate or incorrect or insufficient information, which leads to a misdiagnosis by the RMP, I hereby undertake that the RMP and the IBHL shall not be held responsible for the same, and I hereby absolutely release and discharge the RMP and the IBHL against any and all liabilities and claims.</li>
            <li>I understand, agree, and confirm that I am responsible for following the advice/instructions, as regards the diagnosis provided by the RMP and the treatment as advised/instructed by the RMP. If I disregard the RMP’s advice/instruction, in any manner whatsoever, neither the RMP nor the IBHL shall be liable in any form or manner whatsoever and they will stand absolutely released and discharged.</li>
            <li>I understand, agree, and confirm that it is my sole responsibility to seek emergency help or follow-up care, as recommended by the RMP, or when in my reasonable opinion, it is necessary for me to obtain such help or care.</li>
            <li>23. I understand, agree, and confirm that virtual consultations via Telemedicine, as provided by an RMP will be on an “as is” and “as available” basis without any warranty of any kind, expressed or implied, apart from what is contained in the TM Guidelines, the Indian Medical Council Act, 1956 and the Indian Medical Council (Professional Conduct, Etiquettes and Ethics) Regulations 2002, if any (<a href="https://wbconsumers.gov.in/writereaddata/ACT%20&amp;%20RULES/Relevant%20Act%20&amp;%20Rules/Code%20of%20Medical%20Ethics%20Regulations.pdf" target="_blank">https://wbconsumers.gov.in/writereaddata/ACT%20&amp;%20RULES/Relevant%20Act%20&amp;%20Rules/Code%20of%20Medical%20Ethics%20Regulations.pdf</a>).</li>
            <li>I understand, agree, and confirm that a virtual consultation via Telemedicine will be considered a First Consult if (i) the Patient is consulting with the RMP Business Use for the first time; or (ii) the Patient has consulted with the RMP earlier, but more than 3 months have elapsed since the previous consultation, or (iii) the Patient has consulted with the RMP earlier, but for a different health condition.</li>
            <li>Without prejudice to the above, I further understand, agree, and confirm that an RMP may, in his / her sole discretion and professional judgment, and having regard to the interest of the Patient (after taking a holistic view of the situation) determine that a virtual consultation is not appropriate for some or all of my medical or clinical needs and, accordingly, may decide not to provide virtual consultation services via Telemedicine, and I agree to any such determination of the RMP.</li>
            <li>I understand, agree, and confirm that neither the RMP nor the IBHL nor any of its trustees, consultants, staff, or employees will be held responsible for breach of confidentiality if there is reasonable evidence that my privacy and confidentiality have been compromised as a result of a technology breach or by a person other than an RMP or the IBHL. I further understand, agree, and confirm that although the IBHL and the RMP have taken reasonable steps to employ industry-standard practices and technology to ensure the protection of private and confidential information transmitted through TM Communication, even the most secure systems can be compromised and neither the IBHL (nor any of its trustees, consultants, staff or employees) nor the RMP can ensure absolute security and I will not hold them liable for any such breach.</li>
            <li>27. I understand, agree, and confirm to the publication of my treatment for medical, scientific, and/or educational purposes including such photographing, videotaping, and televising with description or other observation, provided the pictures or descriptive texts accompanying them do not reveal my identity.</li>
            <li>I understand, agree, and confirm to make immediate payments to the IBHL of all amounts due and payable to them pursuant to the virtual consultation via Telemedicine, provided by the IBHL and/or the RMP and for all other fees, charges, and taxes that may be charged / leviable in connection therewith.</li>
            <li>I understand, agree, and confirm again that there are limitations to a virtual consultation via Telemedicine and that it cannot replace a physical examination, and that a physical examination would be required if the examination requires physical touch and feel, such as for palpation, percussion or auscultation.
            <li>I understand, agree, and confirm that there are limitations as regards the tools used in TM Communication for virtual consultation via Telemedicine, which are as under:
              <ul>
                  <li>For Video based consultation –
                    <ul>
                      <li>It is dependent on the high-quality internet connection at both ends, else it will lead to a sub-optimal exchange of information; and</li>
                      <li>There is a possibility of abuse/ misuse of Patient’s privacy by third parties.</li>
                    </ul>
                  </li>
                  <li>For Audio based consultation –
                    <ul>
                      <li>I understand, agree, and confirm that IBHL will never allow consultation solely based on audio communication. Some of the reasons are:
                        <ul>
                          <li>Non-verbal cues may be missed.</li>
                          <li>Not suitable for conditions that require a visual inspection (e.g. skin, eye, or tongue examination).</li>
                          <li>Greater chance of imposters representing the real Patient.</li>
                        </ul>
                      </li>
                      
                    </ul>
                  </li>
                  <li>For Texts based consultation –
                    <ul>
                      <li>I understand, agree, and confirm that IBHL will never allow consultation solely based on Text-based consultation. Some of the reasons are:
                        <ul>
                          <li>Besides the visual and physical touch, non-verbal cues may be missed;</li>
                          <li>Difficult to establish rapport with the Patient;</li>
                          <li>Cannot be sure of the identity of the RMP or the Patient.</li>
                          
                        </ul>
                      </li>
                    
                    </ul>
                  </li>
                  <li>For Asynchronous (i.e., email, fax, recordings etc.) based consultation –
                    <ul>
                      <li>Not a real-time interaction, so just one-way context is available.</li>
                      <li>Relying solely on the articulation by the Patient.</li>
                      <li>Patient identification is document-based only and difficult to confirm.</li>
                      <li>Non-verbal cues may be missed.</li>
                      <li>There may be delays because the RMP may not see the mail immediately.</li>
                    </ul>
                  </li>
              </ul>
            </li>
            <li>I agree and confirm that if I avail of virtual consultation via Telemedicine from IBHL or an RMP, I undertake to abstain and refrain from doing the following:
              <ul>
                <li>use the virtual consultation via Telemedicine in an unlawful way or for any illegal and/or unlawful purpose.</li>
                <li>post or transmit (a) a message under a false name, or (b) any data, materials, content, or information (including, without limitation, advice and recommendations) (collectively, “Information”) which is;
                  <ul>
                    <li>libelous, defamatory, obscene, fraudulent, false, or contrary to the ownership or intellectual property rights of any person, or</li>
                    <li>contains or promotes any virus, worm, Trojan horse, time bomb, or other computer programming or code that is designed or</li>
                    <li>intended to damage, destroy, or otherwise interrupt or</li>
                    <li>expropriate TM Communications or facilitate or promote hacking or similar conduct.</li>
                  </ul>
                </li>
                <li>impersonate or misrepresent my identity (or the accompanying adult’s identity, as the case may be) or falsely state or misrepresent my affiliation with a person or entity,</li>
                <li>tamper, hack, or otherwise corrupt the administration, security, or proper function of the TM Communication.</li>
                <li>use robots or scripts or any form of artificial intelligence with the TM Communication.</li>
                <li>attempt to reverse engineer, reverse assemble, reverse compile, decompile, disassemble, translate, or otherwise alter, defraud, or create false results from any executable code, Information on or received by TM Communication.</li>
                <li>have anti-virus and/or anti-spyware software running that is set to override the internet browser&#39;s cookie settings.</li>
              </ul>
            </li>
            <li>I hereby knowingly confirm that:
              <ul>
                <li>THE USE OF THE VIRTUAL CONSULTATION VIA TELEMEDICINE IS CONDITIONED UPON ACCEPTANCE OF THESE T&amp;C BY MY CLICKING ‘ACCEPT’, WHEREUPON THE T&amp;C SET OUT HEREIN WOULD BE BINDING ON ME.</li>
                <li>BY AGREEING TO A TELEMEDICINE CONSULTATION, I HEREBY IT IS ACKNOWLEDGED THAT ALL THE T&amp;C HAVE BEEN REVIEWED, UNDERSTOOD AND ACCEPTED BY ME, INCLUDING ITS BENEFITS AND RISKS, AND THAT MY CONSENT TO A TELEMEDICINE CONSULTATION HAS BEEN PROVIDED.</li>
                <li>NEITHER THE IBHL NOR THE RMP, GUARANTEE THAT TELEMEDICINE CONSULTATION IS THE APPROPRIATE COURSE OF TREATMENT FOR MY PARTICULAR HEALTH CARE PROBLEM AND IS NOT A SATISFACTORY SUBSTITUTE FOR A PHYSICAL CONSULTATION / EXAMINATION.</li>
                <li>THE USE OF THE TELEMEDICINE SERVICES, IS SUBJECT TO POTENTIAL TECHNOLOGICAL RISKS, INCLUDING INTERRUPTIONS, UNAUTHORIZED ACCESS, AND TECHNICAL DIFFICULTIES, AND I FURTHER CONFIRM THAT HOSPITAL/ RMP MAY DISCONTINUE THE TELEMEDICINE SERVICES AT ANYTIME THEY DEEM APPROPRIATE IN THEIR DISCRETION.</li>
                <li>IBHL’S / RMP’S RESPONSIBILITY WILL END UPON THE TERMINATION OF A VIRTUAL CONSULTATION VIA TELEMEDICINE.</li>
                <li>NOTWITHSTANDING ANYTHING TO THE CONTRARY CONTAINED HEREIN, I UNCONDITIONALLY AND ABSOLUTELY CONFIRM, AGREE AND ACCEPT THAT (TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW) NEITHER THE RMP NOR THE IBHL, (NOR ITS TRUSTEES, CONSULTANTS, EMPLOYEES, AND STAFF) SHALL BE LIABLE OR RESPONSIBLE FOR ANY DIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL, EXEMPLARY, PUNITIVE, OR INDIRECT DAMAGES ARISING OUT OF OR OTHERWISE RELATING TO THE PROVISION OF TELEMEDICINE CONSULTATION TO ME.</li>
              </ul>
            </li>
            <li>All of the T&amp;C as contained herein shall in all respects be subject to, governed by, and construed in accordance with Indian law including all matters of construction, validity, and performance.
              <ul>
                  <li>For the benefit of the RMP, the IBHL and its Trustees, Consultants, Employees, and Staff, the High Court of Bombay in Mumbai shall have exclusive jurisdiction to settle any and all disputes that may arise from or are in connection with these T&amp;C and, accordingly, any legal action or proceedings arising out of or in connection with these T&amp;C (“Proceedings”) may be brought in that court and I irrevocably submit to the jurisdiction of that court.</li>
                  <li>This Clause is for the benefit of RMP, the IBHL, and its Trustees, Consultants, Employees, and Staff only. As a result, and notwithstanding Clause 33(a) hereinabove, it does not prevent RMP and/or the IBHL from adopting Proceedings in any other courts with jurisdiction. To the extent allowed by applicable law, RMP and/or the IBHL may adopt concurrent proceedings in any number of jurisdictions.</li>
              </ul>
            </li>
            <li>I understand, agree, and confirm;
              <ul>
                <li>that in the event of any conflict between these T&amp;Cs and the terms contained in the TM Guidelines, the provisions contained in the TM Guidelines will prevail and</li>
                <li>to the extent relevant, the terms contained in the TM Guidelines will be deemed to be incorporated into these T&amp;Cs.</li>
              </ul>
            </li>
            <li>I hereby confirm and acknowledge that I have agreed to the T&amp;Cs, as contained herein, on my own free will and volition, after having carefully perused and considered the same, and having sought independent advice of any accompanying adult, if required, before consenting to these T&amp;C. Upon accepting these T&amp;C, I will not seek to dispute, deny, or contest any or all of the terms as contained herein for any cause or reason whatsoever.</li>
            <li>I hereby confirm and acknowledge that I can read and understand English and where I cannot understand English, I have obtained help from my people who can read and understand English and who have helped me understand all the terms and conditions mentioned herein.</li>
          </ul>
          <div style="text-align:end">
            <button type="submit" class="close-login-popup btn btn__primary">I Agree</button>
          </div>

          <p class="login-popup__desc"></p>
        
      </div>
    </div><!-- /.login-popup -->
  <?php include('js-scripts.php'); ?>
  <script>  
    function calculateAge()
    {
        var pdob= document.getElementById("patient-dob").value;
        var dob = new Date(pdob);  
        //calculate month difference from current date in time  
        var month_diff = Date.now() - dob.getTime();  
          
        //convert the calculated difference in date format  
        var age_dt = new Date(month_diff);   
          
        //extract year from date      
        var year = age_dt.getUTCFullYear();  
          
        //now calculate the age of the user  
        var age = Math.abs(year - 1970);  
      
        //display the calculated age 
        document.getElementById("patient-age").value=age 

    }
      
</script>
</body>
</html>
