@extends('layouts/app')
@section('title', 'STE | Our Team')

@section('content')
<div class="tile tile-red tile-main">
    <h1 class="text-center">Our Team</h1>
    <div class="team-container">
        <div class="team-member-card">
            <div class="member-image"><img class="dark-border" src="{{asset('images/tom-fascio.jpg')}}" alt=""></div>
            <div class="member-content">
                <div class="member-name">Tom Fascio (President)</div>
                <div class="member-bio">
                    <p>Tom Fascio is the Board President of Strength Through Education, Inc.  He is a US Army veteran with a combination of Active Duty and Reserve service of six years.  He brings decades of advocacy experience from a 28 year career, starting as a Field Representative / Organizer for Laborers’ Local Union 665 Bridgeport, CT, then becoming a Staff Representative for Connecticut Council 4 / American Federation of State, County and Municipal Employees (AFSCME / AFL-CIO).  While at Council 4, he provided the full range of representation to local unions:  planning and conducting contract negotiations, including Interest Impasse Resolution procedures, prepared and presented cases before administrative bodies, including Grievance Arbitration cases before tripartite and single arbitrators.  He was also a Notary Public within the State of Connecticut for 25 years.</p>
                    <p>Tom is proud to be a ten year member of the American Legion.  First, as a member of Post 16 Shelton, CT, he served as Jr. Vice Commander for five years. As a member of the Honor Guard, he performed memorial services and other related duties.  He is currently a member of Post 103 Punta Gorda, FL, and he is the Sergeant at Arms.</p>
                </div>
            </div>
        </div>
        <div class="team-member-card">
            <div class="member-image"><img class="dark-border" src="{{asset('images/diane-mitchell.jpg')}}" alt=""></div>
            <div class="member-content">
                <div class="member-name">Diane Mitchell (Founder/Executive Director)</div>
                <div class="member-bio">
                    <p>Diane is the founder of Strength Through Education, Inc.  She is the proud mom of three boys, two of whom are actively serving in the military, US Army and US Air Force.  They are continuing a long, proud history of military service that touches nearly every generation in their family and that can be traced to the Revolutionary War.</p>
                    <p>Diane is a lifelong educator.  She holds a Bachelor’s degree in English, and a Master’s Degree in Special Education.  She has held New York State teaching certification in High School English, Elementary, Elementary Special Education, and Teaching English to Speakers of Other Languages.  She left a teaching career that spanned 25 years in private and public schools to launch Strength Through Education, Inc. This organization allows her to continue following her passion for education, with a shift in focus from the classroom to the digital world.</p>
                    <p>Based on the personal experiences of her sons and their military buddies, Diane realized there is a desperate need for an educational platform providing information and support to service members through the various forms of digital medium most commonly used by this generation.  Her experience as a teacher has equipped her with the tools necessary to conduct thorough research, summarize and annotate information into a comprehensible format, and present it in a way that empowers the receiver with clear direction moving forward.</p>
                </div>
            </div>
        </div>
        <div class="team-member-card">
            <div class="member-image"><img class="dark-border" src="{{asset('images/bette-rogers.jpg')}}" alt=""></div>
            <div class="member-content">
                <div class="member-name">Bette Rogers (Treasurer)</div>
                <div class="member-bio">
                    <p>Bette Rogers is the Treasurer of the Board of Strength Through Education, Inc. She is a retired educator with a passion for introducing her students to the tools they need to carry the skills they learn in class to life outside the classroom. After teaching ten years in Japan, she moved back to the United States and began teaching at Rochester Institute of Technology where she taught for 16 years.</p>
                    <p>Outside of her teaching duties at the university, she was on the board of directors of an affiliated organization dedicated to raising funds for student scholarships. After working with that non-profit for 13 years and organizing their primary fundraising event for ten years, Bette was introduced to Strength Through Education at its inception and was motivated to get involved because of the obvious need for its very existence.</p>
                </div>
            </div>
        </div>
        <div class="team-member-card">
            <div class="member-image"><img class="dark-border" src="{{asset('images/shelley-smith.jpg')}}" alt=""></div>
            <div class="member-content">
                <div class="member-name">Shelley Smith (Director of Operations)</div>
                <div class="member-bio">
                    <p>Shelley is a Life Coach specializing in leadership development and organizational culture.  She believes effective leadership inspires and motivates, builds dynamic teams, and cultivates new leaders.  Shelley has worked with individuals from a wide variety of ethnic and socio-economic backgrounds, to help them develop skills, overcome obstacles, and set and attain goals.  She holds a Bachelor’s degree in Psychology – Life Coaching, and is pursuing a Master’s degree in Organizational Leadership with a concentration in Nonprofit Management (anticipated graduation July, 2021).</p>
                </div>
            </div>
        </div>
        <div class="team-member-card">
            <div class="member-image"><img class="dark-border" src="{{asset('images/gavin-goodman.jpg')}}" alt=""></div>
            <div class="member-content">
                <div class="member-name">Gavin Goodman  (Marketing and Outreach Director)</div>
                <div class="member-bio">
                    <p>Gavin is the owner of Southern Hospitality Experiences, located in Huntsville, Alabama.  It is a marketing, consulting, and event management company.  He has provided us with professional expertise (consulting services and help with our public launch) pro bono, to help get this organization off the ground.  He has also connected us with numerous military charities, professional affiliations, and legal counsel.</p>
                </div>
            </div>
        </div>
        <div class="team-member-card">
            <div class="member-image"><img class="dark-border" src="https://place-hold.it/150x225.jpg" alt=""></div>
            <div class="member-content">
                <div class="member-name">Michael Smith (Videographer)</div>
                <div class="member-bio">
                    <p>Michael brings with him a deep passion for all things creative.  A recent graduate, Michael strives for excellence in every creative endeavor and is an accomplished musician and songwriter.</p>
                </div>
            </div>
        </div>
        <div class="team-member-card">
            <div class="member-image"><img class="dark-border" src="{{asset('images/terry-smith.jpg')}}" alt=""></div>
            <div class="member-content">
                <div class="member-name">Terry Smith (Web Developer/Graphic Designer)</div>
                <div class="member-bio">
                    <p>Terry comes to Strength Through Education with 20 years of web development and application development experience.  He has a Bachelor's Degree in Graphic Design and a passion for visual arts.  Terry is a life-long supporter of the US military and many of his family members have served proudly.</p>
                </div>
            </div>
        </div>
    </div>
    
</div>
    
@endsection