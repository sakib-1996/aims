@extends('layouts.frontend.app')

@section('meta_keywords', 'How to make a complaint')
@section('meta_description', 'How to make a complaint')

@section('title', 'How to make a complaint')

@section('content')

    <section class="section"
        style="background: url('{{ asset('build/assets/frontend/images/about/1.png') }}'), no-repeat; height:250px;">
        <div class="d-flex h-100 justify-content-center alig-items-center fw-bold fs-16">
            <a href="#" class="text-white align-self-center">Home</a>
            <span class="mx-2 align-self-center">
                <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.195262 9.47139C-0.0650874 9.21104 -0.0650874 8.78893 0.195262 8.52859L3.72386 4.99999L0.195262 1.47139C-0.0650878 1.21104 -0.0650878 0.788935 0.195262 0.528585C0.455611 0.268235 0.877721 0.268235 1.13807 0.528585L5.13807 4.52858C5.39842 4.78893 5.39842 5.21104 5.13807 5.47139L1.13807 9.47139C0.877722 9.73174 0.455612 9.73174 0.195262 9.47139Z"
                        fill="#fff" />
                </svg>
            </span>
            <a href="#" class="text-white align-self-center">How to make a complaint</a>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-5">
        <div class="container">
            <div class="content-wrapper">
                <div class="main-content-complaint">
                    <h1 class="page-title">Complaints Procedure</h1>
                    <hr>
                    {{-- <p class="lead">
                        If you wish to raise a concern or make a complaint against one of our registered practitioners
                        or affiliated counselling organizations, this guide will help you through the process.
                    </p>

                    <div class="alert alert-info">
                        <i class="fas fa-info-circle me-2"></i>
                        AIMS takes all complaints seriously and is committed to ensuring the complaints process is
                        clear, fair, and accessible.
                    </div> --}}

                    <h2 id="introduction" class="section-title">Introduction</h2>
                    <p>
                        Making a Complaint – The Association of Islamic Mental Health Specialists (AIMS)
                        If you wish to raise a concern or make a complaint against one of our registered
                        practitioners or affiliated counselling organisations, the following information will help guide
                        you through the
                        process.
                        AIMS takes all complaints seriously and is committed to ensuring the complaints process is
                        clear, fair,
                        and accessible to all clients who believe they have experienced misconduct or have a
                        legitimate
                        concern.
                        All complaints will be handled with fairness and impartiality.
                    </p>

                    <h2 id="steps" class="section-title">Step-by-Step Process</h2>

                    <div class="step-card">
                        <h3 class="subsection-title"><span class="step-number">1</span>Local Resolution</h3>
                        <p>If you believe there is an issue that needs to be addressed, we encourage you to first
                            attempt resolution directly with the counsellor or their agency, following the complaints
                            procedure discussed at the outset of your counselling.</p>
                    </div>

                    <div class="step-card">
                        <h3 class="subsection-title"><span class="step-number">2</span>Contacting AIMS</h3>
                        <p>If local resolution does not result in a satisfactory outcome, you may contact AIMS by email,
                            or in writing to request a complaint form, or you can download the form from our website.
                        </p>
                        <div class="highlight">
                            <p><strong>Email us at:</strong> <a href="mailto:info@aimsonline.org">info@aimsonline.org</a>
                            </p>
                        </div>
                    </div>

                    <div class="step-card">
                        <h3 class="subsection-title"><span class="step-number">3</span>Outlining the Complaint</h3>
                        <p>When submitting your complaint, please clearly explain what you believe the practitioner or
                            organisation did or failed to do in relation to AIMS' Code of Ethics and Practice.</p>
                        <p>We understand that the complaints process can be overwhelming. AIMS can provide a neutral
                            support person to help you identify which aspects of the Code may have been breached. Please
                            note that this individual will not be advocating for your complaint but will help you
                            navigate the process and complete the form accurately.</p>
                    </div>

                    <div class="step-card">
                        <h3 class="subsection-title"><span class="step-number">4</span>Important Considerations</h3>
                        <p>Please be aware that AIMS cannot provide legal advice or reimburse any costs, including
                            travel or associated expenses, for either the complainant or the practitioner.</p>
                    </div>

                    <div class="step-card">
                        <h3 class="subsection-title"><span class="step-number">5</span>Initial Review and Process</h3>
                        <p>Once your complaint is formally received, it will be referred to a director of AIMS for an
                            initial assessment on how to proceed. The Director may consult with our independent non
                            executive board members, which includes lay representatives providing guidance on ethical
                            and professional matters.</p>
                        <p>If the complaint is deemed not actionable, you will be informed of the reasons.</p>
                        <p>If the complaint proceeds, the following steps will be taken:</p>
                        <ul>
                            <li><strong>A. Acknowledgement:</strong> You will receive written acknowledgment of your
                                complaint, typically within 7 working days.</li>
                            <li><strong>B. Notification to Respondent:</strong> Within 14 working days, the counsellor
                                or organisation you are complaining about will be notified. They will receive a summary
                                of your complaint, excluding any personal contact details.</li>
                            <li><strong>C. Appointment of Investigator:</strong> AIMS will appoint an independent
                                investigator and notify you of who this is. The investigator will contact you with
                                questions and may request supporting evidence. Please respond promptly and work with the
                                investigator to facilitate the process. Delays can occur, but AIMS will keep you
                                informed throughout.</li>
                            <li><strong>D. Investigation Report and Review:</strong> Once the investigation concludes,
                                the investigator will submit a report outlining their findings and whether there is a
                                prima facie case to answer. This report will be reviewed by a Pre-Hearing Assessment
                                Panel to decide whether a formal disciplinary hearing is warranted. You will be informed
                                of this decision and may appeal it by providing additional information or valid reasons.
                                If no satisfactory grounds for appeal are provided, the complaint will either be closed
                                or proceed to a hearing.</li>
                            <li><strong>E. Disciplinary Panel (if required):</strong> If a hearing is necessary, all
                                parties will be invited to participate. Evidence gathered during the investigation will
                                typically be shared with both sides. The panel will make a determination and communicate
                                its decision to both parties. You have the right to appeal the outcome.</li>
                            <li><strong>F. Sanctions (if complaint is upheld):</strong> If the complaint is upheld, AIMS
                                will implement appropriate sanctions as recommended by the panel. The counsellor or
                                organisation will be required to comply fully.</li>
                            <li><strong>G. Learning Outcomes (even if not upheld):</strong> Even where a complaint is
                                not upheld, AIMS may still issue recommendations to improve practice and ensure future
                                safety for clients. Lessons learned from the process may be shared anonymously with all
                                members to inform and enhance best practice across the profession.</li>
                        </ul>
                    </div>

                    <h2 id="complaints-procedure" class="section-title">AIMS Complaints Procedure</h2>

                    <h3 id="procedure-introduction" class="subsection-title">1. INTRODUCTION</h3>
                    <p><strong>1.1</strong> This complaints procedure applies to counsellor members, registrants, and
                        affiliated organisations of the Association of Islamic Mental Health Specialists. Guidance on
                        the process can be found in the Guidance for people who wish to make a complaint.</p>
                    <p><strong>1.2</strong> The aim of this document is to protect members of the public and uphold the
                        reputation of the profession. This framework should normally only be used when local complaints
                        procedures have been exhausted.</p>
                    <p><strong>1.3</strong> A client's contract with an individual counsellor or organisation should
                        provide details of the complaints procedure, including how to access this procedure if local
                        processes do not resolve the matter.</p>
                    <p><strong>1.4</strong> The aim of this document is also to promote safe and professional practice
                        by counsellors working from an Islamic perspective.</p>

                    <h3 id="bringing-complaint" class="subsection-title">2. BRINGING A COMPLAINT</h3>
                    <p><strong>2.1</strong> The complaints procedure will be implemented as follows:</p>
                    <ul>
                        <li><strong>2.2</strong> The basis for making a complaint is a breach of Ethics for Members.
                        </li>
                        <li><strong>2.3</strong> A complaint should normally be lodged within three years of the alleged
                            breach. A neutral person will be offered to help clarify issues and guide you through the
                            process.</li>
                        <li><strong>Required details in the complaint form:</strong>
                            <ul>
                                <li>The name of the person and/or organisation being complained about</li>
                                <li>The date(s) of the alleged breach</li>
                                <li>The location(s) where it occurred</li>
                                <li>Context (counselling relationship, other context, or third-party witness)</li>
                                <li>The name of any organisation to which the counsellor belongs</li>
                                <li>Full written details of the complaint, signed and dated</li>
                            </ul>
                        </li>
                        <li><strong>2.4</strong> Complaints not meeting the above conditions will not normally be
                            processed.</li>
                        <li><strong>2.5</strong> Complainants are expected to first try resolving the matter locally
                            through the counsellor's or organisation's own complaints procedure.</li>
                        <li><strong>2.6</strong> Records will be kept for two years. Upheld complaints and sanctions may
                            be published on the website and shared with relevant agencies.</li>
                        <li><strong>2.7</strong> No expenses will be paid to either party.</li>
                        <li><strong>2.8</strong> The process will follow protocols set by the Association, administered
                            by the Director.</li>
                        <li><strong>2.9</strong> The Association reserves the right to initiate a complaint if credible
                            information warrants investigation.</li>
                    </ul>

                    <h3 id="complaints-process" class="subsection-title">3. COMPLAINTS PROCESS</h3>
                    <ul>
                        <li><strong>3.1</strong> Once the complaint form is received, the Director of the Association
                            will acknowledge it in writing, usually within seven working days. The Director will then
                            assess whether a formal investigation is required.</li>
                        <li><strong>3.2</strong> Following consultation with the panel, the Director may suspend a
                            counsellor, affiliated organisation, or registered participant from membership,
                            accreditation, or affiliation. The complaints panel is an independent body made up of lay
                            representatives, which provides advice on ethical and professional conduct.</li>
                        <li><strong>3.3</strong> Such a suspension may take effect immediately and remain in place until
                            the investigation concludes and any decisions by the Disciplinary Panel and Appeals Panel
                            are finalised. This authority is provided for under the Interim Sanctions Policy and may be
                            exercised by the Director or the Disciplinary Panel after consultation with the RAP. If
                            suspension is imposed, the published notice will set out its duration and whether practice
                            may continue during this period. Before the final decision is made, the parties concerned
                            will be consulted, for example if an appeal is underway.</li>
                        <li><strong>3.4</strong> The Association accepts no responsibility for any loss or expenses
                            arising from a suspension, even if the complaint is later dismissed.</li>
                        <li><strong>3.5</strong> Within fourteen working days of receiving the complaint, the Director
                            will write to the person named in the complaint, outlining the details and providing a copy
                            of the submission.</li>
                        <li><strong>3.6</strong> Legal advice may be sought at any stage of the investigation to ensure
                            the process is fair and compliant with applicable requirements.</li>
                        <li><strong>3.7</strong> The Director will appoint an appropriately qualified individual to act
                            as the complaints investigator and carry out the initial fact-finding process.</li>
                        <li><strong>3.8</strong> Investigations will normally be conducted through written
                            correspondence. However, meetings may be arranged if this is considered necessary.</li>
                        <li><strong>3.9</strong> The investigator may request relevant documents, including counselling
                            contracts, promotional materials, qualifications, supervisor reports, and any prior
                            accreditation or practice review records held by the Association. Access to client records
                            may also be requested, but only with the written consent of the complainant or the client
                            concerned if the complainant is a third party.</li>
                        <li><strong>3.10</strong> Once all evidence is gathered, the investigator will present the
                            findings to a Pre-Hearing Assessment Panel, typically comprising two experienced counsellors
                            (where possible, at least one from the same therapeutic approach as the practitioner
                            concerned) and one lay member. The panel will determine whether there is a case to answer
                            and decide whether to: refer the matter to the Disciplinary Panel, request further
                            information or clarification, or dismiss the complaint. The panel may interview the
                            complainant and/or the person complained against if needed.</li>
                        <li><strong>3.11</strong> If the panel asks for additional information, the complaint will be
                            reassessed once that information is received, and the panel will decide whether to proceed
                            to a disciplinary hearing or close the case.</li>
                        <li><strong>3.12</strong> If the panel decides to reject the complaint, both parties will be
                            informed in writing, including reasons for the decision. The complainant may appeal by
                            submitting further information or demonstrating valid grounds for a hearing. If these are
                            not provided to a satisfactory standard, the matter will be closed.</li>
                        <li><strong>3.13</strong> Where the panel accepts the complaint, the formal disciplinary process
                            will commence.</li>
                    </ul>

                    <h3 id="formal-procedure" class="subsection-title">4. FORMAL PROCEDURE</h3>
                    <ul>
                        <li><strong>4.1</strong> Once a complaint has been accepted, both parties will be notified in
                            writing that the matter is proceeding to the Disciplinary Panel.</li>
                        <li><strong>4.2</strong> All evidence submitted by either the complainant or the respondent will
                            normally be shared with all parties involved. However, information may be withheld if
                            disclosure poses a risk to any party, provided that withholding such information does not
                            compromise fairness or transparency. The Chair will ensure that all relevant submissions are
                            distributed to the parties concerned. All materials received must be treated as strictly
                            confidential and must not be shared beyond the process.</li>
                        <li><strong>4.3</strong> Both parties are required to comply with the protocols of the
                            Association regarding the Complaints Procedure. Failure to comply may result in termination
                            of the procedure and/or termination of membership with AIMS.</li>
                        <li><strong>4.4</strong> Failure to renew membership, resignation, or withdrawal from the
                            Register during the course of a complaint will not terminate or invalidate the complaint
                            process.</li>
                        <li><strong>4.5</strong> The Disciplinary Panel will consist of two suitably experienced
                            counsellors and one lay person, none of whom will have had prior involvement in the
                            complaint. Members must declare any interest that could compromise, or be perceived to
                            compromise, their impartiality when approached by the Chair of AIMS (who is responsible for
                            convening the Panel).</li>
                        <li><strong>4.6</strong> The role of the Disciplinary Panel is to examine the complaint and
                            determine whether it is upheld.</li>
                        <li><strong>4.7</strong> The Panel will receive reports from the complaint investigator, who may
                            also make recommendations. All parties to the complaint may attend the hearing and present
                            their case, and may be accompanied by one person of their choosing. AIMS will not normally
                            be responsible for any costs incurred by the parties in attending. The venue will be chosen
                            by the Association.</li>
                        <li><strong>4.8</strong> All written evidence, submissions, and witness statements must be
                            submitted to the Chair no later than 28 days before the scheduled hearing. These documents
                            will then be circulated to all parties within a reasonable timeframe prior to the hearing.
                        </li>
                        <li><strong>4.9</strong> The Chair of the Disciplinary Hearing, with appropriate advice, will
                            decide whether any new evidence submitted on the day of the hearing will be accepted.</li>
                        <li><strong>4.10</strong> Parties intending to call witnesses must notify the Executive Chair at
                            least 28 days in advance, providing names and details of the witnesses. Witness attendance
                            will only be permitted if they have provided a written statement that requires
                            clarification. The Panel has the discretion to refuse witness attendance if it deems their
                            input irrelevant or unlikely to add value to the case. Witnesses may be questioned by both
                            the Panel and either party involved.</li>
                        <li><strong>4.11</strong> If either party fails or refuses, without good reason or notice, to
                            attend the hearing, the Chair may decide to:
                            <ul>
                                <li>Proceed with the hearing in their absence;</li>
                                <li>Adjourn to another date; or</li>
                                <li>Terminate membership following due process.</li>
                            </ul>
                        </li>
                        <li><strong>4.12</strong> The Panel will normally reach a decision on the day of the hearing.
                            However, in line with the Standards required by the PSA for Accredited Voluntary Registers,
                            the decision will be reviewed by the RAP to ensure the outcome is fair, proportionate,
                            transparent, effective, and consistent. For further guidance on suspensions or reconvening
                            panels for deliberation, please see the Indicative Sanctions Policy.</li>
                        <li><strong>4.13</strong> AIMS will inform both the complainant and the respondent in writing of
                            the Panel's decision within 28 days.</li>
                        <li><strong>4.14</strong> AIMS aims to complete the complaints process within six months.</li>
                    </ul>

                    <h3 id="disciplinary-measures" class="subsection-title">5. DISCIPLINARY MEASURES</h3>
                    <ul>
                        <li><strong>5.1</strong> The Association of Islamic Mental Health Specialists (AIMS) will carry
                            out any disciplinary measures decided by the Disciplinary Panel as appropriate. These may
                            include one or more of the following:</li>
                        <li><strong>5.2</strong> A written warning, which may include a request for an apology and a
                            commitment to avoid further breaches of the Code.</li>
                        <li><strong>5.3</strong> A requirement for the individual or organisation to undertake further
                            training, or for their work to be monitored by a supervisor approved by the Disciplinary
                            Panel.</li>
                        <li><strong>5.4</strong> Suspension of an individual from the Register, or suspension of
                            organisational affiliation, for a specified period until the conditions set by the Panel are
                            met.</li>
                        <li><strong>5.5</strong> Permanent removal from the Register or termination of organisational
                            affiliation, requiring the immediate cessation of counselling, training, or supervision.
                            Membership of AIMS will also cease from that date.</li>
                        <li><strong>5.6</strong> Restrictions or conditions placed on practice, applied either to an
                            individual or an organisation, which may limit their ability to work with certain client
                            groups or in specific areas of practice.</li>
                        <li><strong>5.7</strong> The above list is not exhaustive. Other measures may be imposed if
                            deemed fair and appropriate in the circumstances.</li>
                        <li><strong>5.8</strong> Failure to comply with any sanction will result in immediate
                            termination of membership and/or removal from the Register. The decision will be recorded
                            publicly, and the Chief Executive Officer will ensure it is enacted following the Panel's
                            determination.</li>
                        <li><strong>5.9</strong> Where a member is suspended or removed from the Register, AIMS may
                            inform other relevant professional bodies or regulatory organisations in line with good
                            practice for public safety.</li>
                        <li><strong>5.10</strong> Sanctions such as suspension, permanent removal, or practice
                            restrictions will be recorded against the member's name in the AIMS Register to ensure
                            transparency and protect the public. Warnings or cautions may also be noted but will not
                            normally be published more widely.</li>
                        <li><strong>5.11</strong> The duration of publication and the removal of sanctions will be
                            determined by AIMS in accordance
                            with its disciplinary procedures</li>
                    </ul>

                    <h3 id="appeals" class="subsection-title">6. APPEALS</h3>
                    <ul>
                        <li><strong>6.1</strong> Either party to a complaint may appeal against the decisions or
                            sanctions of the Disciplinary Panel by writing to the Chair of the Association of Islamic
                            Mental Health Specialists (AIMS) within two weeks of being notified of the decision. The
                            appeal must clearly state the grounds on which it is being made.</li>
                        <li><strong>6.2</strong> An appeal will not be granted if, after review, the Chair considers
                            that:
                            <ul>
                                <li>there is insufficient evidence available, or likely to become available, to support
                                    the grounds for appeal; or</li>
                                <li>the appeal is frivolous or vexatious.</li>
                                <li>This decision will be final.</li>
                            </ul>
                        </li>
                        <li><strong>6.3</strong> An appeal may be considered on any of the following grounds:
                            <ul>
                                <li>the decision was made against the weight of the evidence;</li>
                                <li>the sanction applied is disproportionate to the findings of the Panel;</li>
                                <li>a procedural error or impropriety may have had a material effect on the Panel's
                                    decision;</li>
                                <li>new evidence has become available that was not reasonably accessible at the time of
                                    the Disciplinary Panel hearing.</li>
                            </ul>
                        </li>
                        <li><strong>6.4</strong> If an appeal is accepted, the Chair will appoint an Appeals Panel
                            consisting of four suitably experienced individuals, including at least one lay member. The
                            Appeals Panel will be convened specifically for this purpose, and its members will not be
                            part of the AIMS Board, Executive, or any committee with prior involvement in the case.</li>
                        <li><strong>6.5</strong> The Appeals Panel will consider the appeal in full, which may include a
                            hearing where parties are given the opportunity to attend and present their case. The Panel
                            may also seek legal or professional advice if required. Following its deliberations, the
                            Chair will write to both parties to notify them of the outcome and whether the appeal has
                            been upheld or rejected.</li>
                        <li><strong>6.6</strong> The decision of the Appeals Panel is final. No further appeal will be
                            available within the Association.</li>
                    </ul>

                    <h3 id="publication" class="subsection-title">7. PUBLICATION</h3>
                    <ul>
                        <li><strong>7.1</strong> The Association of Islamic Mental Health Specialists (AIMS) will
                            publish on its website the outcome of any Disciplinary or Appeal Panel where the complaint
                            has resulted in a restriction of practice, suspension of membership, or permanent removal
                            from membership. Publication will include sufficient detail to reflect the findings and
                            ensure transparency. Individual member records will be updated on the AIMS Register to
                            reflect the sanction.</li>
                        <li><strong>7.2</strong> Any notification that AIMS is entitled to publish under these
                            procedures may, at the Association's discretion, also be published in other appropriate
                            formats or platforms.</li>
                    </ul>

                    <div class="contact-box">
                        <h3 class="text-white"><i class="fas fa-life-ring me-2"></i>Need Help with the Process?</h3>
                        <p class="mb-0">Our team is here to assist you with the complaints process. Contact us for
                            guidance and support.</p>
                        <a href="mailto:info@aimsonline.org" class="btn btn-light mt-3">Contact Us</a>
                    </div>

                    {{-- <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title"><i class="far fa-file-pdf text-danger me-2"></i>Download Resources
                            </h5>
                            <p class="card-text">Access our complaint form and additional guidance documents</p>
                            <a href="#" class="btn btn-outline-primary me-2">Complaint Form (PDF)</a>
                            <a href="#" class="btn btn-outline-primary">Code of Ethics</a>
                        </div>
                    </div> --}}

                    <p class="text-muted"><small>Published and revised September 2025</small></p>
                </div>

                <div class="sidebar">
                    <h4 class="sidebar-title">On This Page</h4>
                    <a href="#introduction" class="toc-link">Introduction</a>
                    <a href="#steps" class="toc-link">Step-by-Step Process</a>
                    <a href="#complaints-procedure" class="toc-link">AIMS Complaints Procedure</a>
                    <a href="#procedure-introduction" class="toc-link toc-sublink">1. Introduction</a>
                    <a href="#bringing-complaint" class="toc-link toc-sublink">2. Bringing a Complaint</a>
                    <a href="#complaints-process" class="toc-link toc-sublink">3. Complaints Process</a>
                    <a href="#formal-procedure" class="toc-link toc-sublink">4. Formal Procedure</a>
                    <a href="#disciplinary-measures" class="toc-link toc-sublink">5. Disciplinary Measures</a>
                    <a href="#appeals" class="toc-link toc-sublink">6. Appeals</a>
                    <a href="#publication" class="toc-link toc-sublink">7. Publication</a>

                    <div class="mt-4 pt-3 border-top">
                        <h5 class="fw-bold mb-3">Quick Links</h5>
                        {{-- <a href="#" class="d-block mb-2 text-decoration-none"><i
                                class="fas fa-download me-2"></i>Download Form</a>
                        <a href="#" class="d-block mb-2 text-decoration-none"><i class="fas fa-book me-2"></i>Code
                            of
                            Ethics</a> --}}
                        <a href="mailto:info@aimsonline.org" class="d-block mb-2 text-decoration-none"><i
                                class="fas fa-envelope me-2"></i>Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('css')
    <style>
        .content-wrapper {
            display: flex;
            gap: 30px;
            position: relative;
        }

        .main-content-complaint {
            flex: 1;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .sidebar {
            width: 300px;
            position: sticky;
            top: 100px;
            align-self: flex-start;
            max-height: calc(100vh - 120px);
            overflow-y: auto;
            padding: 20px;
            background: var(--light);
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .sidebar-title {
            color: #307c96;
            font-weight: 600;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--accent);
        }

        .toc-link {
            display: block;
            padding: 8px 12px;
            margin-bottom: 5px;
            color: var(--dark);
            text-decoration: none;
            border-left: 3px solid transparent;
            transition: all 0.3s;
            font-size: 0.95rem;
        }

        .toc-link:hover,
        .toc-link.active {
            border-left-color: var(--accent);
            background-color: rgba(58, 124, 189, 0.1);
            color: #307c96;
        }

        .toc-sublink {
            padding-left: 30px;
            font-size: 0.9rem;
        }

        .page-title {
            color: #307c96;
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 15px;
        }

        .page-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 70px;
            height: 4px;
            background: var(--accent);
            border-radius: 2px;
        }

        .section-title {
            color: #307c96;
            font-weight: 600;
            margin: 40px 0 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--border);
        }

        .subsection-title {
            color: #307c96;
            font-weight: 600;
            margin: 30px 0 15px;
        }

        .step-card {
            background: var(--light);
            border-left: 4px solid #307c96;
            border-radius: 4px;
            padding: 20px;
            margin-bottom: 25px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.03);
        }

        .step-number {
            display: inline-block;
            width: 32px;
            height: 32px;
            background: #307c96;
            color: white;
            text-align: center;
            line-height: 32px;
            border-radius: 50%;
            margin-right: 10px;
            font-weight: 600;
        }

        .highlight {
            background-color: rgba(230, 126, 34, 0.1);
            border-left: 4px solid var(--accent);
            padding: 20px;
            margin: 25px 0;
            border-radius: 4px;
        }

        .contact-box {
            background: linear-gradient(to right, #307c96, #3a7cbd);
            color: white;
            padding: 25px;
            border-radius: 8px;
            margin: 40px 0;
        }

        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: #307c96;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.2);
            opacity: 0;
            transition: all 0.4s;
            z-index: 1000;
        }

        .back-to-top.visible {
            opacity: 1;
        }

        @media (max-width: 992px) {
            .content-wrapper {
                flex-direction: column;
            }

            .main-content-complaint {
                max-width: 100%;
            }

            .sidebar {
                width: 100%;
                position: relative;
                top: 0;
                margin-bottom: 30px;
            }
        }
    </style>
@endpush
@push('js')
    <script>
        // Table of Contents highlighting
        const sections = document.querySelectorAll('.section-title, .subsection-title');
        const navLinks = document.querySelectorAll('.toc-link');

        window.addEventListener('scroll', function() {
            let current = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').substring(1) === current) {
                    link.classList.add('active');
                }
            });

        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
@endpush
