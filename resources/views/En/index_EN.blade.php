@extends('layout.main_EN')

@section('title', 'Global Multicash')

@section('container')

	<div class="container-fluid">
		
		<section class="home-slider home ftco-degree-bg">
	      <div class="slider-item">
	        <div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-5 fiProb">
                <!-- <input type="text" id="hidTranslateEN"> -->
                <h1 id="sTitle">Your Financial Problem Solution</h1>
                 @if(isset($lang))
                    <input type="hidden" value={{$lang}} id="pLang">                  
                 @endif            
                <p id="psTitle">We can help your financial problem by offering the Quick Loans with low interest. We offer loans from Rp. 500.000 - Rp. 60.000.000. Once it Approved your loan send to your Bank Account directly.
                </p>               
              </div>
              

              <div class="col-md-7 imgCover">
                  <!-- <img class="img-fluid" src="{{asset('assets/img/res_happyman.png')}}" alt="Res_Global multicash" > -->
                  <img src="{{asset('assets/img/Res_Global multicash2_opacity.png')}}" alt="Res_Global multicash"  id="srcGmbar">
              </div>
	            
	          </div>
	        </div>
	      </div>
	  </section>

  	<section class="ftco-section ourservices ftco-degree-bg" id="ourservices">
        <div class="container">
          <div class="row justify-content-center rLayan pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate ">
              <span class="subheading" id="sHOS">Our Services</span>
              <h2 id="pOSH2">We give you easy access to Loan with low interest...!</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate ">
              <div class="media block-6 services d-block text-center">
                <div class="d-flex justify-content-center"><div class="icon color-2 d-flex justify-content-center mb-3"><span class="align-self-center">
                  <img src="{{asset('assets/img/high_security.png')}}" width="60px" height="60px" alt="Security">
                </span></div></div>
                <div class="media-body p-2">
                  <h3 class="heading tjdlH" id="sHSecure">High Security</h3>
                  <p id="pHSecure" class="pJdlText">By Using High Security Technology Encryption. We will surely to protect your privacy and would never disclose any personal information to anyone.</p>
                </div>
              </div>      
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services d-block text-center">
                <div class="d-flex justify-content-center"><div class="icon color-1 d-flex justify-content-center mb-3"><span class="align-self-center">
                  <img src="{{asset('assets/img/cs2.png')}}" width="60px" height="60px" alt="Customer Service">
                </span></div></div>
                <div class="media-body p-2">
                  <h3 class="heading tjdlH" id="sH24CS">24 Hour Customer Service</h3>
                  <p id="pH24CS" class="pJdlText">We are here to provide 7*24 hour high-quality customer service. If you had any questions or obstacles, do not hesitate to contact us.</p>
                </div>
              </div>      
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services d-block text-center">
                <div class="d-flex justify-content-center"><div class="icon color-1 d-flex justify-content-center mb-3"><span class="align-self-center">
                  <img src="{{asset('assets/img/fast_run2.png')}}" width="60px" height="60px" alt="Fast & Easy">
                </span></div></div>
                <div class="media-body p-2">
                  <h3 class="heading tjdlH" id="sHFE">Fast & Easy</h3>
                  <p id="pHFE" class="pJdlText">Fast & easy to Approve. You can get up to 60,000,000 Rp in hour.</p>
                </div>
              </div>    
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services d-block text-center">
                <div class="d-flex justify-content-center"><div class="icon color-3 d-flex justify-content-center mb-3"><span class="align-self-center">
                  <img src="{{asset('assets/img/zeroPercent3.png')}}" width="80px" height="80px" alt="Interest">
                </span></div></div>
                <div class="media-body p-2">
                  <h3 class="heading tjdlH" id="sHLowIn">Low Interest</h3>
                  <p id="pHLowIn" class="pJdlText">We offer a low interest personal loan starting 0.05% p.a. The loan term varies from 3-5 years and the repayments can be made weekly, fortnightly or monthly</p>
                </div>
              </div>      
            </div>
          </div>
        </div>
    </section>

    <section class="ftco-section-parallax apply ftco-degree-bg" id="apply">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-10 text-center heading-section heading-section-white ftco-animate mt-5 ">
              <span class="subheading" id="sHHapp">How to Apply...??</span>
              <!-- <h2 id="pSHapp"> Langkah sederhana untuk mendaftar</h2> -->
              
         			 <div class="row rowapply" id="rmargin">
                <div class="col-md-1"></div>
      	          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
      	            <div class="media block-6 services d-block text-center">
      	              <div class="d-flex justify-content-center"><div class="d-flex justify-content-center mb-3"><span class="align-self-center">
                        <img src="{{asset('assets/img/regist.png')}}" alt="" width="140px" height="140px">
                      </span></div></div>
      	              <div class="media-body p-2 mt-2">
      	                <h3 class="heading text-white" id="pHFReg">1. Fill your personal data in registration form</h3>
      	              </div>
      	            </div>      
      	          </div>

      	         <!--  <div class="col-md-2 d-flex align-self-stretch ftco-animate">
      	            <div class="media block-6 services d-block text-center">
      	              <div class="d-flex justify-content-center"><div class="icon color-2 d-flex justify-content-center mb-3"><span class="align-self-center icon-long-arrow-right"></span></div></div>	              
      	            </div>      
      	          </div> -->
                  <!-- <div class="col-md-offset-1"></div> -->

      	          <div class="col-md-3 d-flex align-self-stretch  ftco-animate">
      	            <div class="media block-6 services d-block text-center">
      	              <div class="justify-content-center"><div class="d-flex justify-content-center mb-3 "><span class="align-self-center">
                       <img src="{{asset('assets/img/approve1.png')}}" alt="" width="150px" height="150px"> 
                      </span></div></div>
      	              <div class="media-body p-2 mt-2">
      	                <h3 class="heading text-white" id="pHWav">2. Wait for admin Verification</h3>
      	              </div>
      	            </div>      
      	          </div>

      	          <!-- <div class="col-md-2 d-flex align-self-stretch ftco-animate">
      	            <div class="media block-6 services d-block text-center">
      	              <div class="justify-content-center">
                        <div class="icon color-2 d-flex justify-content-center mb-3">
                          <span class="align-self-center icon-long-arrow-right"></span>
                        </div></div>
      	            </div>      
      	          </div> -->
                  
      	          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
      	            <div class="media block-6 services d-block text-center">
      	              <div class="d-flex justify-content-center">
      	              	<div class="d-flex justify-content-center mb-3">
      	              		<!-- <span class="align-self-center icon-dollar"></span> -->
                          <span><img src="{{asset('assets/img/moneyRp.png')}}" alt="" width="140px" height="140px"></span>
      	              	</div>
      	              </div>
      	              <div class="media-body p-2 mt-2">
      	                <h3 class="heading text-white" id="pHGL">3. Get your money/h3>
      	              </div>                        
      	            </div>    
      	          </div> 
                  <!-- <div class="col-md-offset-1"></div> -->
                    
               </div>               

            <!--   <p class="ftco-animate mt-3"><a href="#" class="btn btn-primary btn-outline-white py-3 px-4 btnApply" id="pBtnApply">Apply Now</a></p> -->
            </div>
          </div>	      
	     <div class="parallax-img d-flex align-items-center">
	     </div>
        </div>
      </div>
    </section>
	
  	<section class="isiContactUS" id="isiContactUS">		
  		<div class="container">
    		<div class="d-flex justify-content-center"></div>				
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card shadow p-1 mb-3 bg-white rounded">
            	<div class="col-md-12 text-center heading-section mt-3 ftco-animate">
                <div class="card-header headContact">
      					   <h1 class="scontact" id="HConUS">Contact us</h1>  				
                </div>
                <div class="card-body">
                  <form method="POST" action="/pay_verify" name="post_Verify" enctype="multipart/form-data">
                  @csrf                               
                    <div class="form-group row ftco-animate">
                      <label for="txtUsrName" class="col-sm-2 ml-4 col-form-label" id="lblUsrNm" >Username
                        <span class="errRequired">*</span>
                      </label> 
                       <div class="col-sm-8"> 
                          <input type="text" name="txtUsrName" id="txtUsrName" class="form-control @error('txtUsrName') is-invalid @enderror" placeholder = "Masukan Nama Anda..." >
                          @error('txtUsrName')<div class="invalid-feedback">{{ 'Tolong Masukan Nama Anda.....!'}}</div>@enderror
                      </div>                     
                    </div>            

                    <div class="form-group row ftco-animate">
                      <label for="txtsEmail" class="col-sm-2 ml-4 col-form-label" id="lblEmail" >Email
                        <span class="errRequired">*</span>
                      </label> 
                      <div class="col-sm-8">
                          <input type="text" name="txtsEmail" id="txtsEmail" class="form-control @error('txtsEmail') is-invalid @enderror" placeholder="Masukan alamat Email Anda... " style="background-color: #e8f0fd" value="{{old('txtsEmail')}}">
                           @error('sEmail')<div class="invalid-feedback">{{ 'Tolong Masukan alamat Email Anda...!'}}</div>@enderror
                      </div>                     
                    </div>

                    <div class="form-group row ftco-animate">
                      <label for="txtsTelp" class="col-sm-2 ml-4 col-form-label" id="lblPhone" >Phone
                            <span class="errRequired">*</span> 
                      </label> 
                      <div class="col-sm-8">
                          <input type="text" name="txtsTelp" id="txtsTelp" class="form-control @error('txtsTelp') is-invalid @enderror" placeholder="Masukan nomor Telpon Anda..." style="background-color: #e8f0fd" value="{{old('txtsTelp')}}">
                          @error('txtsTelp')<div class="invalid-feedback">{{ 'Tolong Masukan nomor Telpon Anda...!'}}</div>@enderror 
                      </div>                     
                    </div>         

                    <div class="form-group row ftco-animate">
                      <label for="txtsmsg" class="col-sm-2 ml-4 col-form-label" id="lblMessage" >Message
                            <span class="errRequired">*</span> 
                      </label> 
                      <div class="col-sm-8">
                          <textarea name="txtsmsg" id="txtsmsg" class="form-control @error('txtsmsg') is-invalid @enderror" placeholder="Tulis pesan yang akan anda sampaikan..." style="background-color: #e8f0fd" value="{{old('txtsmsg')}}"></textarea>
                          @error('txtsmsg')<div class="invalid-feedback">{{ 'Tolong Tulis pesan yang akan anda sampaikan...!'}}</div>@enderror 
                      </div>                     
                    </div>  

                    <div class="btnCfm ftco-animate">
                      <button type="submit" class="btn btn-primary btn-group btn-lg d-inline " name="btn_post_Verify" id="btn_post_Verify">Submit
                      </button>              
                      <button type="reset" class="btn btn-danger btn-group btn-lg d-inline " name="btnReset" id="btnReset">Reset</button>
                    </div>  

                  </form>                
                </div>
              </div>
            </div>                                              
          </div>      
        </div>
  		</div>
  	</section>
			   
    <section class="ftco-section-parallax about ftco-degree-bg" id="about">
      <div class="parallax-img d-flex align-items-center">
          <div class="container">
              <div class="row d-flex justify-content-center rabout ftco-animate">
                <h1 class="sabout" id="HAbout">
                  About Us
                </h1>
              </div>
            <div class="row sjdl ftco-animate">
              <p class="heading" id="pHAbout">
              Global Multicash is Information technology platform which managed by Sembilan Bola Dunia that has priority to protect their consumer's security from High Risk.
              </p>
            </div>
          </div>
      </div>
      <div class="parallax-img d-flex align-items-center"></div>
      <div class="parallax-img d-flex align-items-center"></div>     
    </section>   
  </div>  

@endsection