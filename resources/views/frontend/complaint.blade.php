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

            @php
                $currentSlug = request()->query('slug') ?? 'how-to-make-a-complaint';
            @endphp

            <ul class="nav nav-pills mb-3" id="custom-pills-tab" role="tablist">
                <li class="nav-item">
                    <a href="{{ route('how-to-make-complaint', ['slug' => 'how-to-make-a-complaint']) }}"
                        class="nav-link rounded-pill px-4 py-2 {{ $currentSlug === 'how-to-make-a-complaint' ? 'active' : '' }}"">
                        How to make a complaint
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('how-to-make-complaint', ['slug' => 'guidance-for-people-who-wish-to-make-a-complaint']) }}"
                        class="nav-link rounded-pill px-4 py-2 {{ $currentSlug === 'guidance-for-people-who-wish-to-make-a-complaint' ? 'active' : '' }}">
                        Guidance for People Who Wish to Make a Complaint
                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <a href="{{ route('how-to-make-complaint', ['slug' => 'aims-indicative-sanctions-policy']) }}"
                        class="nav-link rounded-pill px-4 py-2 {{ $currentSlug === 'aims-indicative-sanctions-policy' ? 'active' : '' }}">
                        AIMS Indicative Sanctions Policy
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ route('how-to-make-complaint', ['slug' => 'complaints-against-aims-its-board-or-committees']) }}"
                        class="nav-link rounded-pill px-4 py-2 {{ $currentSlug === 'complaints-against-aims-its-board-or-committees' ? 'active' : '' }}">
                        Complaints Against AIMS, Its Board, or Committees
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ route('how-to-make-complaint', ['slug' => 'complaints-against-aims-staff']) }}"
                        class="nav-link rounded-pill px-4 py-2 {{ $currentSlug === 'complaints-against-aims-staff' ? 'active' : '' }}">
                        Complaints Against AIMS Staff
                    </a>
                </li>
            </ul>


            @if ($currentSlug === 'guidance-for-people-who-wish-to-make-a-complaint')
                @include('frontend.complaint.guidance-for-people-who-wish-to-make-a-complaint')
            @elseif ($currentSlug === 'aims-indicative-sanctions-policy')
                @include('frontend.complaint.AIMS-indicative-sanctions-policy')
            @elseif ($currentSlug === 'complaints-against-aims-its-board-or-committees')
                @include('frontend.complaint.Complaints-against-AIMS-its-Board-or-Committees')
            @elseif ($currentSlug === 'complaints-against-aims-staff')
                @include('frontend.complaint.Complaints-against-AIMS-staff')
            @else
                @include('frontend.complaint.complaints-procedure')
            @endif


        </div>
    </section>

@endsection

@push('css')
    <style>
        .nav-link:hover:not(.active):not(.disabled) {
            background-color: #f8d7da;
            color: #721c24;
        }

        .nav-link.active {
            font-weight: bold;
        }
    </style>
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
