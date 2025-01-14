@extends('layout.master')
@section('body')
    <section id="home" style="background-image: url('{{ asset('image/slider.png') }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <div class="col">
            <h1>Cybersecurity Made Simple with Sangfor Cyber Command</h1>
            <p>Simplify your cybersecurity with Sangfor Cyber Command's user-friendly interface and comprehensive threat protection.</p>
            <div class="row">
                <a href="#aboutus" class="freeTrial">FREE TRIAL</a>
                <a href="#aboutus" class="freeTrial1">></a>
            </div>
        </div>
    </section>
    <section id="aboutus" style="background-image: url('{{ asset('image/aboutus.png') }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <div class="row">
        <div class="right">
            <h1 style="color: rgba(41, 54, 96, 1)">About Sangfor Cyber Command</h1>
            <p>Sangfor Cyber Command falls into Network Detection & Response (NDR) Solutions which is a comprehensive security management platform designed to protect businesses from cyber threats.</p>
            <p>It provides a range of security solutions such as threat detection, incident response, and compliance management. With Sangfor Cyber Command, organizations can monitor their network traffic, analyze security events, and respond to incidents quickly and efficiently.  
            </p>
            <p>The platform uses advanced machine learning algorithms and big data analytics to identify and prevent cyber-attacks before they cause damage.  It also offers a user-friendly dashboard that enables businesses to track their security posture in real-time and make informed decisions based on the insights provided. </p>
            <p>Overall, Sangfor Cyber Command is a powerful tool for businesses looking to strengthen their cybersecurity defenses and safeguard their assets from modern-day threats. </p>
        </div>
        <div class="left">
            <form action="{{ route('homecontroller.store') }}" class="col" method="POST">
                @csrf
                <div>
                    <h3 style="color: rgba(41, 54, 96, 1);">Dapatkan Free Trial selama 1 bulan</h3>
                    <p style="color: rgba(109, 109, 109, 1);">analisa keamanan network anda dan lihat hasilnya!</p>
                </div>
                <div class="row name">
                    <div class="col">
                        <label for="">First Name <span style="color: red">*</span></label>
                        <input type="text" placeholder="First Name" name="firstName" required>
                    </div>
                    <div class="col">
                        <label for="">Last Name<span style="color: red">*</span></label>
                        <input type="text" placeholder="Last Name" name="lastName" required>
                    </div>
                </div>
                <div class="col">
                    <label for="">Corporate Email<span style="color: red">*</span></label>
                    <input type="text" name="email" placeholder="email@mail.com" required>
                </div>
                <div class="col">
                    <label for="">Job Title<span style="color: red">*</span></label>
                    <input type="text" name="jobTitle" placeholder="Your Job" required>
                </div>
                <div class="col">
                    <label for="">Company Name<span style="color: red">*</span></label>
                    <input type="text" name="companyName" placeholder="Your Company" required>
                </div>
                <div class="col">
                    <label for="">Industry<span style="color: red">*</span></label>
                    <select id="industry" name="industry" required>
                        <option value="" disabled selected>Select Industry</option>
                        @foreach ($industries as $i)
                        <option value="{{ $i->id }}">{{ $i->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="">Phone Number<span style="color: red">*</span></label>
                    <input type="text" name="phoneNumber" placeholder="Phone Number" required>
                </div>
                <div class="row agree">
                    <input type="checkbox" name="check" class="Your Number" required>
                    <p>click this box to agree to be contacted by  our team and
                        get great deals on Sangfor for Helios!</p>
                </div>
                <div class="button">
                    <button type="submit" class="send">SEND</button>
                </div>
            </form>
        </div>
    </div>
    </section>
    <section id="advantage" style="background-image: url('{{ asset('image/advantage.png') }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <div class="col">
        <h1 style="color: white;">Sangfor Cyber Command Advantages</h1>
        <div class="advantage row">
            <div class="col">
                <img src="{{ asset('image/Virus Scan.png') }}" alt="">
                <h2 style="color: rgba(41, 54, 96, 1)">Advance Threat Detection</h2>
                <p>Sangfor Cyber Command offers advanced threat detection capabilities that can help users identify and respond to potential security threats in real-time. This includes identifying and blocking malware, ransomware, and other types of cyber threats.</p>
            </div>
            <div class="col">
                <img src="{{ asset('image/Anti Virus.png') }}" alt="">
                <h2 style="color: rgba(41, 54, 96, 1)">Network Visibility and Control</h2>
                <p>Sangfor Cyber Command provides users with visibility and control over their network infrastructure. This includes monitoring network traffic, controlling access to resources, and managing network policies.</p>
            </div>
        </div>
        <div class="advantage row">
            <div class="col">
                <img src="{{ asset('image/Upload.png') }}" alt="">
                <h2 style="color: rgba(41, 54, 96, 1)">Cloud Security</h2>
                <p>Sangfor Cyber Command offers cloud security solutions that can help users secure their cloud-based applications and infrastructure. This includes protecting against cloud-specific threats like data breaches, account hijacking, and insider threats.</p>
            </div>
            <div class="col">
                <img src="{{ asset('image/Cyber Security.png') }}" alt="">
                <h2 style="color: rgba(41, 54, 96, 1)">Comprehensive Security Management</h2>
                <p>Sangfor Cyber Command provides users with a comprehensive security management platform that can help them manage and monitor their entire security infrastructure from a single console. This includes managing security policies, tracking security events, and generating reports.</p>
            </div>
        </div>
    </div>
    </section>
    <section id="feature">
    <div class="col">
        <h1 style="color: rgba(41, 54, 96, 1)">Sangfor Cyber Command Features</h1>
        <div class="feature row">
            <div class="col">
                <img src="{{ asset('image/Retina Lock.png') }}" alt="">
                <h2 style="color: rgba(41, 54, 96, 1)">Threat Intelligence</h2>
                <p>Advanced AI algorithms and machine learning provide comprehensive threat intelligence to stay ahead of the latest cyber threats.</p>
            </div>
            <div class="col">
                <img src="{{ asset('image/Online Shopping.png') }}" alt="">
                <h2 style="color: rgba(41, 54, 96, 1)">Real-Time Detections</h2>
                <p>Real-time alert system provides instant notification of potential security incidents.</p>
            </div>
            <div class="col">
                <img src="{{ asset('image/Spyware.png') }}" alt="">
                <h2 style="color: rgba(41, 54, 96, 1)">Threat Investigation</h2>
                <p>In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.</p>
            </div>
        </div>
        <div class="feature row">
            <div class="col">
                <img src="{{ asset('image/Hacker.png') }}" alt="">
                <h2 style="color: rgba(41, 54, 96, 1)">Comprehensive Security Solutions</h2>
                <p>In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.</p>
            </div>
            <div class="col">
                <img src="{{ asset('image/Safe Chat.png') }}" alt="">
                <h2 style="color: rgba(41, 54, 96, 1)">Rapid Response</h2>
                <p>Tight integration with network and endpoint security solutions enables quick response to potential security incidents, minimizing the impact of any attacks.</p>
            </div>
        </div>
    </div>
    </section>
    <section id="value" style="background-image: url('{{ asset('image/value.png') }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <div class="col">
        <h1 style="color: rgba(41, 54, 96, 1)">Sangfor Cyber Command’s
            Value to Customers</h1>
        <div class="start">
            <div class="row">
                <img src="{{ asset('image/checkmark.png') }}" alt="">
                <p>Detect known dan unknown threats</p>
            </div>
            <div class="row">
                <img src="{{ asset('image/checkmark.png') }}" alt="">
                <p>Much better visibility of security posture of the
                    entire infrastructure</p>
            </div>
            <div class="row">
                <img src="{{ asset('image/checkmark.png') }}" alt="">
                <p>Business Impact Analysis helps IT to understand
                    what is already compromised and what needs
                    to be prioritized</p>
            </div>
            <div class="row">
                <img src="{{ asset('image/checkmark.png') }}" alt="">
                <p>Faster Response to improve overall security control</p>
            </div>
            <div class="row">
                <img src="{{ asset('image/checkmark.png') }}" alt="">
                <p>Much more cost effective than other solutions such as SIEM</p>
            </div>
        </div>
    </div>
    </section>
    <div class="referencetitle">
    <h1 class="reference">Cyber Command Customers Reference</h1>
    </div>
    <section id="reference">
    <div class="col">
        <div class="brand row">
            <img src="{{ asset('image/jnt.png') }}" alt="">
            <img src="{{ asset('image/jasaraharja.png') }}" alt="">
            <img src="{{ asset('image/okbank.png') }}" alt="">
            <img src="{{ asset('image/samudera indonesia.png') }}" alt="">
        </div>
        <div class="bottom col">
            <div class="title">
                <h1 style="color:rgba(41, 54, 96, 1);" class="explore">Explore Sangfor Cyber Command with Helios</h1>
                <p style="color: rgba(108, 100, 106, 1);">Helios Informatika Nusantara as Distributor will provide</p>
            </div>
            <div class="content row">
                <div class="col">
                    <img src="{{ asset('image/icon1.png') }}" alt="">
                    <h3 style="color: rgba(25, 69, 107, 1)">NDR Implementation</h3>
                </div>
                <div class="col">
                    <img src="{{ asset('image/icon2.png') }}" alt="">
                    <h3 style="color: rgba(25, 69, 107, 1)">Incident Response
                        and Threat Hunting</h3>
                </div>
                <div class="col">
                    <img src="{{ asset('image/icon3.png') }}" alt="">
                    <h3 style="color: rgba(25, 69, 107, 1)">Device Security
                        Maintenance</h3>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection