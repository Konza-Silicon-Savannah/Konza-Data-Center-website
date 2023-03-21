@extends('layouts.base')

@section('content')
<div class="container" style="margin-top: 70px;">
    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner px-5 mx-5 fs-5">
            <div class="carousel-item active ">
                <img src="imgs/kndc.jpg" height="400px" class="d-block w-100" style="object-fit: cover;" />
                <div class="carousel-caption">
                    hello
                </div>
            </div>
            <div class="carousel-item ">
                <img src="imgs/kndc1.jpg" height="400px" class="d-block w-100" style="object-fit: cover;" />
            </div>
            <div class="carousel-item">
                <img src="imgs/kndc2.jpg" height="400px" class="d-block w-100" style="object-fit: cover;" />
            </div>
        </div>

    </div>
</div>
<div class="container mt-4 text-justified">
    <p>
        The Konza Technopolis Development Authority (KoTDA) was established by the Kenyan government as a special-purpose vehicle to oversee the transformation of Konza Technopolis into world-class smart city standards. The Technopolis is a key flagship project of Kenya’s Vision 2030, which is meant to position Kenya as a regional technology hub and a major economic driver for the nation. As part of the Phase 1 anchor projects, the Authority has completed the implementation of a neutral carrier Tier III data center that is currently being operationalized to support the government, business enterprises, and smart city facilities with cutting-edge cloud computing products and services. The Konza National Data Center is a Tier III Design and Construction facility located in a smart and sustainable city with multiple internet connections and a dependable power supply.
    </p>
    <p>
        The Data Center serves government and enterprises with high-quality, world-class cloud computing services. It provides various cloud services like Software as a Service (SaaS), Infrastructure as a Service (IaaS), and Platform as a Service (PaaS).
    </p>
    <h5 style="color: #007a37;">Vision</h5>
    <p>To be a global technology and innovation hub. </p>
    <h5 style="color: #007a37;">Mission</h5>
    <p>To develop a sustainable smart city and innovation ecosystem contributing to Kenya’s knowledge-based economy. </p>

    <p>
        As a smart city, Konza Technopolis will incorporate the use of technology leveraging human and social capital to develop a self-sustaining city with an integrated urban information and communication technology (ICT) network that supports the delivery of connected urban services to allow for efficient management of those services on a large scale. As a self-sustaining Technopolis, Konza is deploying the latest technologies, including waste management, recycling, energy efficiency, and a mix of renewable and on-grid energy solutions.
    </p>

    <h3 class="text-center">THE KONZA NATIONAL DATA CENTER </h3>
    <p>The Konza National Data Centre is located within Konza Technopolis and has the following attributes: </p>
    <ol>
        <li>
            <h6 class="text-bold">International Standards & Guidelines</h6>
            The data center has been designed and implemented having 99.98% availability in compliance with the following international standards and best practices:
            <ul>
                <li>LEED v4 BD+C Gold Rating or above. </li>
                <li>TIA-942 Standard. </li>
                <li>Uptime Institute Tier III Design and Construction Certification (Design Certification awarded in Feb 2020 )</li>
            </ul>
            <div class="row mt-4">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <img src="../imgs/tia.jfif" height="100px" width="100px" class="m-2" />

                        <img src="../imgs/leed.jfif" height="100px" width="100px" class="m-2" />

                        <img src="../imgs/tier3.png" height="100px" width="100px" class="m-2" />
                    </div>
                </div>
            </div>
        </li>
        <li>
            <h6 class="text-bold">Reliability</h6>
            <ul>
                <li>
                    <h6>Backup Power. </h6>
                    In the event of a complete state power failure, 2+1 redundant sets of diesel generators support the Data Center for dedicated power supply and continuous operation with 20,000 liters of diesel.
                </li>
                <li>
                    <h6>Uninterruptible Power Supplies (UPS) </h6>
                    2N redundancy lithium-ion UPS systems built from parallel 2000kVA UPS systems provide uninterrupted power supply, filtered power to the data hall. Each cabinet feeds from two separate UPS systems, guaranteeing the high reliability of the UPS power supply.
                </li>
                <li>
                    <h6>Computer Room Air Conditioner (CRAC) </h6>
                    The CRAC system consists of multiple sets of DX-Units – direct expansion in-row cooling system with cold air containment. The CRAC system runs in a full N+1 configuration, powered by dedicated UPS power, guaranteeing continuous operation.

                    The system maintains a constant ambient temperature of 22 +/- 2 °C, with a relative humidity of 40 to 60%. All the running parameters are continually monitored and recorded by the DCIM.
                </li>
                <li>
                    <h6>Data Center Infrastructure Management (DCIM) </h6>
                    The Data Center is managed by AI-based DCIM, a next-generation data center infrastructure management system. It provides an innovative and leading intelligent O&M solution for Data Center to maximize the efficiency and value of the Data Center. It provides basic UPS, cooling, power distribution, CCTV, and various alarm management, asset life cycle management, capacity management, energy efficiency management, tenant management, video management, access control management, intelligent O&M, security management, and log management.
                </li>
            </ul>
        </li>
        <li>
            <h6 class="text-bold">Security</h6>
            The Data center has been designed and implemented with multiple security levels:
            <ul>
                <li>
                    Multiple access controls.
                </li>
                <li>
                    Five-level biometric fingerprint access control from the main gate to the main building door will be utilized, data hall, aisle containment access control, and cabinet-level access control
                </li>
                <li>
                    All the entrance records will be recorded by the DCIM.
                </li>
                <li>
                    The CCTV cameras have no blind spot and monitor both the perimeter of the facility as well as all areas inside the facility.
                </li>
            </ul>

        </li>
        <li>
            <h6 class="text-bold">Connectivity</h6>
            KNDC has connectivity from major service providers, including NOFBI, TEAMS, Safaricom, and KPLC. The Data Center has been connected to 3 routes on the recently completed TEAMs project which include 100G from Mombasa to Konza, 10G from Konza to Ardhi and Konza to Treasury. The primary link is Konza to Treasury while Konza to Ardhi acts as the redundant link. KoTDA has invited all ISPs including Telkom Kenya, Liquid Telcom, Access Kenya and Jamii Telkom to terminate at the Data Center, to provide carrier neutrality to cloud tenants enabling connectivity through their provider of choice. 
        </li>
    </ol>
</div>
<footer class="py-2 mt-4 mx-0 bg-successes mt-5">
    <p class="text-center text-white">
        &copy; <script>
            document.write(new Date().getFullYear())
        </script>
        , Konza Technopolis
    </p>
</footer>


@endsection