<?php
/**
 * Template Name: Events
 * Template Post Type: page
 */
get_header(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Game Development Services | Source Code Lab</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Swiper CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <style>
    /* ====================== GLOBAL & VARIABLES ====================== */
    :root {
        --scl-accent: #949952;
        --scl-white: #ffffff;
        --scl-submenu-bg: rgba(8, 10, 14, 0.70);
        --scl-submenu-blur: 6px;
        --scl-nav-hover-translate: -3px;
        --scl-nav-transition: 220ms cubic-bezier(.2, .9, .2, 1);
        --scl-bg-overlay-top: rgba(0, 0, 0, 0.44);
        --scl-bg-overlay-bottom: rgba(0, 0, 0, 0.44);
        --scl-hero-max-width: 1320px;
        /* Benefits Section Vars */
        --scl-primary: #8fb92d;
        --scl-accent-green: #a8d944;
        --scl-text: #1e293b;
        --scl-light: #f8fafc;
    }

    /* Base Layout */
    .scl-intro {
        position: relative;
        overflow: hidden;
        min-height: 92vh;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--scl-white);
    }

    .scl-intro__bg {
        position: absolute;
        inset: 0;
        z-index: 0;
        background-image: linear-gradient(to bottom, var(--scl-bg-overlay-top), var(--scl-bg-overlay-bottom)), url("http://localhost/sourcecodelab/wp-content/uploads/2025/11/Custom-game-2.jpg");
        background-size: cover;
        background-position: center;
        will-change: transform;
        transition: transform 320ms ease;
    }

    .scl-intro__content {
        position: relative;
        z-index: 3;
        width: 100%;
        max-width: var(--scl-hero-max-width);
        padding: 64px 28px;
        text-align: center;
        box-sizing: border-box;
    }

    .scl-intro__title {
        color: #ffffff !important;
        font-size: clamp(40px, 6vw, 96px);
        font-weight: 800;
        margin: 0 0 36px;
        text-shadow: 0 12px 36px rgba(0, 0, 0, 0.45);
        line-height: 1.02;
    }

    .scl-intro__subtitle {
        max-width: 980px;
        margin: 0 auto 30px;
        color: #ffffff;
        opacity: 0.96;
        font-size: clamp(15px, 1.8vw, 20px);
        line-height: 1.65;
        font-weight: 500;
    }

    /* Product Submenu */
    .scl-product-submenu {
        display: inline-block;
        background: var(--scl-submenu-bg);
        backdrop-filter: blur(var(--scl-submenu-blur));
        padding: 12px 18px;
        border-radius: 999px;
        box-shadow: 0 12px 36px rgba(0, 0, 0, 0.44);
        transition: box-shadow var(--scl-nav-transition), background var(--scl-nav-transition);
        z-index: 4;
        margin-top: 16px;
    }

    .scl-product-submenu ul {
        display: flex;
        gap: 22px;
        white-space: nowrap;
        overflow-x: auto;
        overflow-y: hidden;
        scrollbar-width: none;
        padding: 6px 6px;
        margin: 0;
        list-style: none;
    }

    .scl-product-submenu ul::-webkit-scrollbar {
        display: none;
    }

    .scl-product-submenu li {
        display: inline-flex;
        align-items: center;
    }

    .scl-product-submenu li a {
        display: inline-block;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: .06em;
        color: var(--scl-white);
        padding: 12px 14px;
        position: relative;
        transition: transform var(--scl-nav-transition), color var(--scl-nav-transition), opacity var(--scl-nav-transition), text-shadow var(--scl-nav-transition);
        will-change: transform, opacity;
        -webkit-tap-highlight-color: transparent;
    }

    .scl-product-submenu li a:hover,
    .scl-product-submenu li a:focus {
        transform: translateY(var(--scl-nav-hover-translate));
        color: #fff;
        opacity: 1;
        text-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
    }

    .scl-product-submenu li a::after {
        content: "";
        position: absolute;
        left: 12%;
        right: 12%;
        bottom: -8px;
        height: 3px;
        border-radius: 3px;
        background: linear-gradient(90deg, rgba(255, 255, 255, 0.98), var(--scl-accent));
        transform: scaleX(0);
        transform-origin: left center;
        transition: transform 260ms cubic-bezier(.2, .9, .2, 1), opacity 180ms ease;
        opacity: 0.98;
    }

    .scl-product-submenu li a:hover::after,
    .scl-product-submenu li a:focus::after {
        transform: scaleX(1);
    }

    .scl-product-submenu li.active a {
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.03), rgba(255, 255, 255, 0.01));
        padding-left: 14px;
        padding-right: 14px;
        border-radius: 100px;
        box-shadow: inset 0 -2px 12px rgba(0, 0, 0, 0.12), 0 8px 22px rgba(0, 0, 0, 0.18);
    }

    .scl-product-submenu li.active a::after {
        transform: scaleX(1);
    }

    .scl-product-submenu li a::before {
        content: "";
        position: absolute;
        inset: -2px;
        border-radius: 10px;
        pointer-events: none;
        opacity: 0;
        transition: opacity 160ms ease;
        box-shadow: 0 8px 28px rgba(148, 153, 130, 0.06);
    }

    .scl-product-submenu li a:hover::before,
    .scl-product-submenu li a:focus::before {
        opacity: 1;
    }

    .scl-product-submenu li a:focus-visible {
        outline: 3px solid rgba(148, 153, 130, 0.18);
        outline-offset: 4px;
        border-radius: 8px;
    }

    /* Floating Image */
    .scl-intro__figure {
        position: absolute;
        left: 0;
        right: auto;
        top: 0;
        bottom: 0;
        width: clamp(260px, 36vw, 620px);
        z-index: 2;
        pointer-events: none;
    }

    .scl-intro__floating-image {
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        height: 94%;
        object-fit: contain;
        filter: drop-shadow(0 28px 56px rgba(0, 0, 0, 0.52));
        transition: transform 360ms cubic-bezier(.2, .9, .2, 1), filter 320ms ease, opacity 240ms ease;
    }

    .scl-intro__figure:hover .scl-intro__floating-image {
        transform: translateY(-50%) scale(1.02);
        filter: drop-shadow(0 36px 72px rgba(0, 0, 0, 0.60));
    }

    /* Explore CTA */
    .scl-intro__explore {
        position: absolute;
        left: 50%;
        bottom: 26px;
        transform: translateX(-50%);
        z-index: 5;
        text-align: center;
        color: #ffffff;
        font-size: 12px;
        letter-spacing: .12em;
    }

    .scl-intro__explore-circle {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        border: 2px solid rgba(255, 255, 255, 0.20);
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.03);
        margin: 0 auto 8px;
        transition: transform 220ms ease, background 220ms ease, box-shadow 220ms ease;
    }

    .scl-intro__explore-circle::after {
        content: "";
        width: 22px;
        height: 22px;
        background-image: url("http://localhost/sourcecodelab/wp-content/uploads/2025/11/icon-arrow-explore.png");
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain;
        opacity: 1 !important;
        filter: none !important;
        mix-blend-mode: normal;
    }

    .scl-intro__explore:hover .scl-intro__explore-circle,
    .scl-intro__explore:focus-within .scl-intro__explore-circle {
        background: rgba(255, 255, 255, 0.08);
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.36);
    }

    .scl-intro__explore:hover .scl-intro__explore-circle::after,
    .scl-intro__explore:focus-within .scl-intro__explore-circle::after {
        opacity: 1 !important;
        filter: none !important;
    }

    .scl-intro__explore-text {
        display: block;
        font-weight: 700;
        color: #fff;
    }

    /* === Benefits Section Styles === */
    .scl-benefits-section {
        padding: 120px 20px;
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
    }

    .scl-benefits-glow-1,
    .scl-benefits-glow-2 {
        position: absolute;
        border-radius: 50%;
        filter: blur(130px);
        pointer-events: none;
        z-index: 0;
    }

    .scl-benefits-glow-1 {
        width: 800px;
        height: 800px;
        background: radial-gradient(circle, #23B04E 0%, transparent 70%);
        top: -20%;
        left: -15%;
        opacity: 0.15;
    }

    .scl-benefits-glow-2 {
        width: 900px;
        height: 900px;
        background: radial-gradient(circle, #86efac 0%, transparent 65%);
        bottom: -25%;
        right: -20%;
        opacity: 0.12;
    }

    .scl-benefits-container {
        max-width: 1400px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }

    .scl-benefits-header {
        text-align: center;
        margin-bottom: 80px;
    }

    .scl-benefits-header h2 {
        font-size: clamp(2.5rem, 5vw, 3.6rem);
        font-weight: 900;
        background: linear-gradient(90deg, #1e293b, #475569);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin: 0 0 20px;
    }

    .scl-benefits-header p {
        font-size: 1.25rem;
        color: #64748b;
        max-width: 900px;
        margin: 0 auto;
        line-height: 1.8;
    }

    .scl-benefits-slider {
        border-radius: 32px;
        overflow: hidden;
        box-shadow: 0 30px 90px rgba(0, 0, 0, 0.15);
        background: white;
    }

    .scl-benefits-track {
        display: flex;
        transition: transform 0.7s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .scl-benefit-card {
        min-width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr;
        background: white;
    }

    .scl-benefit-image {
        overflow: hidden;
        background: #f1f5f9;
    }

    .scl-benefit-image img {
        width: 70%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.8s ease;
    }

    .scl-benefit-card:hover .scl-benefit-image img {
        transform: scale(1.07);
    }

    .scl-benefit-content {
        padding: 80px 70px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: white;
    }

    .scl-benefit-content h3 {
        font-size: clamp(2rem, 4vw, 2.8rem);
        font-weight: 900;
        color: var(--scl-text);
        margin: 0 0 24px;
        line-height: 1.2;
    }

    .scl-benefit-content p {
        font-size: 1.22rem;
        line-height: 1.8;
        color: #475569;
        margin: 0;
    }

    /* Dots */
    .scl-benefits-dots {
        display: flex;
        justify-content: center;
        gap: 16px;
        margin-top: 50px;
    }

    .scl-dot {
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background: #cbd5e1;
        cursor: pointer;
        transition: all 0.4s;
    }

    .scl-dot.active {
        background: linear-gradient(135deg, var(--scl-primary), var(--scl-accent-green));
        transform: scale(1.6);
        box-shadow: 0 10px 30px rgba(143, 185, 45, 0.4);
    }

    /* CTA */
    .scl-benefits-cta {
        text-align: center;
        margin-top: 90px;
    }

    .scl-btn-primary {
        display: inline-block;
        padding: 22px 64px;
        background: linear-gradient(135deg, var(--scl-primary), var(--scl-accent-green));
        color: white;
        font-size: 1.35rem;
        font-weight: 800;
        border-radius: 60px;
        text-decoration: none;
        box-shadow: 0 20px 50px rgba(143, 185, 45, 0.45);
        transition: all 0.4s;
    }

    .scl-btn-primary:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 70px rgba(143, 185, 45, 0.55);
    }

    /* === Sports Betting Features Styles (Swiper) === */
    .scl-my-swiper-features {
        height: 520px;
        border-radius: 20px;
        overflow: hidden;
    }

    .scl-slide-content-box {
        display: flex;
        height: 100%;
        background: #fff;
    }

    .scl-slide-text-area {
        flex: 1;
        padding: 60px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .scl-slide-image-area {
        flex: 1;
        background: #f8fafc;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px;
    }

    .scl-slide-image {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    .scl-section-padding {
        padding: 100px 0;
    }

    .scl-relative {
        position: relative;
    }

    .scl-overflow-hidden {
        overflow: hidden;
    }

    .scl-absolute {
        position: absolute;
    }

    .scl-inset-0 {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    .scl-pointer-events-none {
        pointer-events: none;
    }

    .scl-w-96 {
        width: 24rem;
    }

    .scl-h-96 {
        height: 24rem;
    }

    .scl-bg-[#23B04E] {
        background-color: #23B04E;
    }

    .scl-rounded-full {
        border-radius: 9999px;
    }

    .scl-filter {
        filter: var(--scl-filter-value, none);
    }

    .scl-blur-3xl {
        filter: blur(40px);
    }

    .scl-opacity-20 {
        opacity: 0.2;
    }

    .scl-animate-pulse {
        animation: scl-pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    @keyframes scl-pulse {

        0%,
        100% {
            opacity: 0.2;
        }

        50% {
            opacity: 0.5;
        }
    }

    .scl-w-80 {
        width: 20rem;
    }

    .scl-h-80 {
        height: 20rem;
    }

    .scl-bg-green-400 {
        background-color: #4ade80;
    }

    .scl-opacity-10 {
        opacity: 0.1;
    }

    .scl-delay-700 {
        animation-delay: 700ms;
    }

    .scl-bg-[#23B04E]\/5 {
        background-color: rgba(35, 176, 78, 0.05);
    }

    .scl-container {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 1rem;
    }

    .scl-z-10 {
        z-index: 10;
    }

    .scl-header-section {
        text-align: center;
        margin-bottom: 60px;
    }

    .scl-main-heading {
        font-size: clamp(2rem, 4vw, 3.5rem);
        font-weight: 800;
        color: #1e293b;
        margin: 0 0 20px;
    }

    .scl-sub-heading-text {
        max-width: 900px;
        margin: 0 auto;
        font-size: 1.15rem;
        color: #475569;
        line-height: 1.7;
    }

    .scl-slider-wrapper {
        max-width: 1000px;
        margin: 0 auto;
    }

    /* Swiper Vertical Pagination (Desktop only) */
    .swiper-pagination {
        display: none;
    }

    @media (min-width: 1280px) {
        .swiper-pagination {
            display: block;
            position: absolute;
            left: 40px;
            top: 50%;
            transform: translateY(-50%);
        }
    }

    .swiper-pagination-bullet {
        background: transparent;
        border: 2px solid #94a3b8;
        opacity: 1;
        width: 14px;
        height: 14px;
        margin: 12px 0 !important;
    }

    .swiper-pagination-bullet-active {
        background: #23B04E;
        border-color: #23B04E;
        transform: scale(1.4);
    }

    /* === Opinion Trading Game Styles (Tailwind Class Conversion) === */
    .scl-glow-bg {
        position: relative;
        overflow: hidden;
        background: #f8fafc;
    }

    .scl-glow-bg::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at 15% 30%, rgba(35, 176, 78, 0.18) 0%, transparent 50%), radial-gradient(circle at 85% 70%, rgba(34, 197, 94, 0.16) 0%, transparent 50%), radial-gradient(circle at 50% 100%, rgba(74, 222, 128, 0.12) 0%, transparent 60%);
        pointer-events: none;
        z-index: 0;
        animation: scl-pulseGlow 15s ease-in-out infinite alternate;
    }

    @keyframes scl-pulseGlow {
        0% {
            opacity: 0.7;
            transform: scale(1);
        }

        100% {
            opacity: 1;
            transform: scale(1.06);
        }
    }

    .scl-glow-orb {
        position: absolute;
        border-radius: 50%;
        filter: blur(90px);
        opacity: 0.18;
        pointer-events: none;
        z-index: 0;
        animation: scl-float 22s infinite ease-in-out;
    }

    .scl-orb-1 {
        width: 700px;
        height: 700px;
        background: #23B04E;
        top: -15%;
        left: -20%;
    }

    .scl-orb-2 {
        width: 600px;
        height: 600px;
        background: #22c55e;
        bottom: -10%;
        right: -15%;
        animation-delay: 8s;
    }

    .scl-orb-3 {
        width: 500px;
        height: 500px;
        background: #86efac;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        animation-delay: 15s;
    }

    @keyframes scl-float {

        0%,
        100% {
            transform: translateY(0) translateX(0);
        }

        50% {
            transform: translateY(-70px) translateX(50px);
        }
    }

    .scl-step-number {
        background: linear-gradient(135deg, #23B04E, #22c55e);
        color: white;
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        font-weight: bold;
        flex-shrink: 0;
        box-shadow: 0 10px 30px rgba(35, 176, 78, 0.4);
    }

    .scl-step-card {
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        border-radius: 24px;
        overflow: hidden;
        background: white;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
        position: relative;
        z-index: 1;
    }

    .scl-step-card:hover {
        transform: translateY(-16px);
        box-shadow: 0 30px 70px rgba(35, 176, 78, 0.18);
    }

    /* Example Box Custom Class */
    .scl-example-box {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(8px);
        border-radius: 1.5rem;
        padding: 3rem 5rem;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        max-width: 72rem;
        margin-left: auto;
        margin-right: auto;
        margin-top: 5rem;
        margin-bottom: 5rem;
        border: 1px solid #f3f4f6;
    }

    /* CTA Button Custom Class */
    .scl-cta-btn {
        display: inline-block;
        background: linear-gradient(to right, #10b981, #059669);
        color: white;
        font-weight: bold;
        font-size: 1.25rem;
        padding: 1.75rem 4rem;
        border-radius: 9999px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .scl-cta-btn:hover {
        transform: scale(1.05);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }

    /* === Achievement Counters Styles === */
    .scl-glass-card {
        background: rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1.5px solid rgba(255, 255, 255, 0.25);
        border-radius: 24px;
        transition: all 0.4s ease;
    }

    .scl-glass-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
        border-color: rgba(255, 255, 255, 0.4);
    }

    .scl-counter {
        font-size: 4.2rem;
        font-weight: 900;
        line-height: 1;
        letter-spacing: -0.03em;
    }

    .scl-counter-text {
        font-size: 1.05rem;
        font-weight: 600;
        opacity: 0.95;
        letter-spacing: 0.5px;
    }

    /* === Bonuses & Payment Solutions Styles === */
    .scl-features {
        background: #fff;
        position: relative;
        overflow: hidden;
    }

    .scl-features::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at 20% 30%, rgba(35, 176, 78, 0.12) 0%, transparent 50%), radial-gradient(circle at 80% 70%, rgba(34, 197, 94, 0.1) 0%, transparent 50%), radial-gradient(circle at 50% 100%, rgba(74, 222, 128, 0.08) 0%, transparent 60%);
        pointer-events: none;
        z-index: 0;
        animation: scl-gentlePulse 12s ease-in-out infinite alternate;
    }

    @keyframes scl-gentlePulse {
        0% {
            opacity: 0.7;
            transform: scale(1);
        }

        100% {
            opacity: 1;
            transform: scale(1.05);
        }
    }

    .scl-glow-orb-1,
    .scl-glow-orb-2,
    .scl-glow-orb-3 {
        position: absolute;
        border-radius: 50%;
        filter: blur(80px);
        opacity: 0.15;
        pointer-events: none;
        z-index: 0;
        animation: scl-float-2 20s infinite linear;
    }

    .scl-glow-orb-1 {
        width: 600px;
        height: 600px;
        background: #23B04E;
        top: -10%;
        left: -15%;
        animation-delay: 0s;
    }

    .scl-glow-orb-2 {
        width: 500px;
        height: 500px;
        background: #22c55e;
        bottom: -5%;
        right: -10%;
        animation-delay: 7s;
    }

    .scl-glow-orb-3 {
        width: 400px;
        height: 400px;
        background: #86efac;
        top: 40%;
        left: 50%;
        transform: translateX(-50%);
        animation-delay: 14s;
    }

    @keyframes scl-float-2 {

        0%,
        100% {
            transform: translateY(0) translateX(0);
        }

        50% {
            transform: translateY(-60px) translateX(40px);
        }
    }

    .scl-section-header {
        text-align: center;
        padding: 100px 40px 60px;
        position: relative;
        z-index: 1;
    }

    .scl-section-header h2 {
        font-size: 48px;
        font-weight: 900;
        background: linear-gradient(to right, #0f172a, #23B04E);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        margin: 0 0 20px;
    }

    .scl-section-header p {
        font-size: 20px;
        color: #475569;
        max-width: 900px;
        margin: 0 auto;
        line-height: 1.8;
    }

    .scl-block {
        display: flex;
        align-items: center;
        max-width: 1280px;
        margin: 60px auto;
        padding: 60px 50px;
        gap: 80px;
        position: relative;
        z-index: 1;
        border-radius: 28px;
        background: #ffffff;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06), 0 20px 50px rgba(0, 0, 0, 0.04), inset 0 1px 0 rgba(255, 255, 255, 0.7);
        overflow: hidden;
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .scl-block::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(248, 250, 252, 0.7) 0%, rgba(241, 245, 249, 0.4) 100%);
        border-radius: 28px;
        z-index: -1;
    }

    .scl-block:hover {
        transform: translateY(-12px);
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.12), 0 40px 90px rgba(35, 176, 78, 0.12);
    }

    .scl-block:nth-child(even) {
        flex-direction: row-reverse;
    }

    .scl-img {
        flex: 1;
        border-radius: 20px;
        overflow: hidden;
        transition: all 0.6s ease;
    }

    .scl-img:hover {
        transform: translateY(-10px) scale(1.03);
        box-shadow: 0 25px 50px rgba(35, 176, 78, 0.2);
    }

    .scl-img img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 20px;
    }

    .scl-text {
        flex: 1;
    }

    .scl-text h2 {
        font-size: 42px;
        font-weight: 800;
        margin-bottom: 24px;
        background: linear-gradient(to right, #0f172a, #23B04E);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        line-height: 1.2;
    }

    .scl-text p {
        font-size: 18px;
        color: #475569;
        line-height: 1.8;
    }

    /* === Latest News Styles (Basic Grid) === */
    .scl-news-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 60px 20px;
    }

    .scl-news-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .scl-icon-box-title {
        font-size: 2.5rem;
        font-weight: 800;
        color: #1e293b;
    }

    .scl-icon-box-description {
        font-size: 1.15rem;
        color: #475569;
        max-width: 700px;
        margin: 10px auto 0;
    }

    .scl-posts-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 35px;
    }

    .scl-post-item {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .scl-post-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .scl-post__thumbnail {
        height: 200px;
        overflow: hidden;
    }

    .scl-post-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .scl-post__text {
        padding: 20px;
    }

    .scl-post__title a {
        font-size: 1.25rem;
        font-weight: 700;
        color: #1e293b;
        text-decoration: none;
        transition: color 0.3s;
    }

    .scl-post__title a:hover {
        color: #06b6d4;
    }

    .scl-post__meta-data {
        font-size: 0.85rem;
        color: #64748b;
        margin: 10px 0;
    }

    .scl-load-more-btn-wrapper {
        text-align: center;
        margin-top: 40px;
    }

    .scl-load-more-btn {
        display: inline-block;
        padding: 12px 30px;
        background: #f1f5f9;
        border-radius: 5px;
        text-decoration: none;
        color: #475569;
        font-weight: 600;
        transition: background 0.3s;
    }

    .scl-load-more-btn:hover {
        background: #e2e8f0;
    }

    /* === Start Your Journey CTA Styles === */
    .scl-plain-cta {
        background: #06b6d4;
        color: #ffffff;
        padding: 80px 20px;
        text-align: center;
        border-radius: 14px;
        overflow: hidden;
        margin: 100px 0;
    }

    .scl-plain-inner {
        max-width: 1000px;
        margin: 0 auto;
    }

    .scl-plain-title {
        font-weight: 800;
        line-height: 1.05;
        margin: 0 0 18px;
        color: #fff;
        font-size: 56px !important;
        text-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
        opacity: 0;
        transform: translateY(10px);
        transition: all .6s cubic-bezier(.2, .9, .2, 1);
    }

    .scl-plain-text {
        color: #fff;
        opacity: .95;
        margin: 0 0 28px;
        font-size: 22px;
        line-height: 1.55;
        opacity: 0;
        transform: translateY(10px);
        transition: all .6s cubic-bezier(.2, .9, .2, 1) .1s;
    }

    .scl-plain-btn {
        display: inline-block;
        padding: 18px 36px;
        background: #fff;
        color: #06b6d4;
        font-weight: 700;
        font-size: 20px;
        border-radius: 10px;
        text-decoration: none;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.22);
        border: 1px solid rgba(255, 255, 255, 0.2);
        opacity: 0;
        transform: translateY(10px);
        transition: all .35s ease .2s;
    }

    .scl-plain-btn:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
    }

    /* Animation trigger */
    .scl-inview .scl-plain-title,
    .scl-inview .scl-plain-text,
    .scl-inview .scl-plain-btn {
        opacity: 1;
        transform: translateY(0);
    }

    /* === FAQ Styles === */
    .scl-faq-item {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        border-radius: 16px;
        overflow: hidden;
        margin-bottom: 1.5rem;
        background: #ffffff;
        border: 1px solid #e2e8f0;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }

    .scl-faq-item:hover {
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
        transform: translateY(-4px);
        border-color: #0891b2;
    }

    .scl-faq-question {
        cursor: pointer;
        padding: 1.75rem 2rem;
        font-weight: 600;
        font-size: 1.15rem;
        line-height: 1.5;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #1e293b;
        user-select: none;
    }

    .scl-faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: all 0.7s cubic-bezier(0.4, 0, 0.2, 1);
        background: #f8fafc;
        font-size: 1.05rem;
        line-height: 1.8;
        color: #475569;
    }

    .scl-faq-answer.open {
        max-height: 1000px;
        padding: 2rem;
        border-top: 1px solid #e2e8f0;
    }

    .scl-faq-icon {
        transition: transform 0.5s ease;
        width: 28px;
        height: 28px;
        flex-shrink: 0;
        color: #0891b2;
    }

    .scl-faq-icon.rotate {
        transform: rotate(180deg);
    }

    .scl-text-cyan-600 {
        color: #0891b2;
    }

    .scl-faq-glow {
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
        filter: blur(130px);
        opacity: 0.14;
        z-index: 0;
    }

    .scl-faq-glow.glow-1 {
        width: 900px;
        height: 900px;
        background: radial-gradient(circle, #23B04E, transparent 70%);
        top: -20%;
        left: -25%;
    }

    .scl-faq-glow.glow-2 {
        width: 800px;
        height: 800px;
        background: radial-gradient(circle, #22c55e, transparent 65%);
        bottom: -15%;
        right: -20%;
    }

    .scl-faq-glow.glow-3 {
        width: 1000px;
        height: 1000px;
        background: radial-gradient(circle at center, #86efac 0%, transparent 60%);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        opacity: 0.09;
    }

    /* === Responsive Overrides === */
    @media (max-width: 1024px) {

        /* Intro */
        .scl-intro__content {
            padding: 48px 22px;
        }

        .scl-intro__title {
            margin-bottom: 34px;
            font-size: clamp(34px, 7.2vw, 72px);
        }

        .scl-intro__subtitle {
            margin-bottom: 28px;
            font-size: clamp(14px, 2.2vw, 18px);
        }

        .scl-product-submenu {
            margin-top: 14px;
            padding: 10px 12px;
        }

        .scl-product-submenu ul {
            gap: 18px;
        }

        .scl-product-submenu li a {
            padding: 10px 12px;
            font-size: 13px;
        }

        .scl-intro__figure {
            width: clamp(180px, 34vw, 420px);
            max-width: 42%;
        }

        .scl-intro__floating-image {
            height: 78%;
            top: 56%;
            transform: translateY(-56%);
        }

        /* Benefits */
        .scl-benefit-card {
            grid-template-columns: 1fr;
        }

        .scl-benefit-image {
            height: 420px;
        }

        .scl-benefit-content {
            padding: 70px 60px;
        }

        /* Bonuses */
        .scl-section-header {
            padding: 80px 20px 40px;
        }

        .scl-section-header h2 {
            font-size: 38px;
        }

        .scl-block,
        .scl-block:nth-child(even) {
            flex-direction: column;
            margin: 40px 20px;
            padding: 50px 30px;
            text-align: center;
            gap: 40px;
        }

        .scl-text h2 {
            font-size: 34px;
        }

        .scl-img {
            order: -1;
            max-width: 100%;
        }

        .scl-img:hover {
            transform: scale(1.02);
        }
    }

    @media (max-width: 780px) {

        /* Intro */
        .scl-intro {
            align-items: flex-start;
            min-height: 86vh;
        }

        .scl-intro__content {
            padding: 30px 18px;
            text-align: center;
        }

        .scl-intro__title {
            margin-bottom: 26px;
            font-size: clamp(26px, 9.4vw, 48px);
        }

        .scl-intro__subtitle {
            margin-bottom: 22px;
            font-size: 15px;
            line-height: 1.55;
            padding: 0 6px;
        }

        .scl-product-submenu {
            display: block;
            width: 100%;
            padding: 8px 10px;
            margin-top: 10px;
            box-shadow: 0 10px 28px rgba(0, 0, 0, 0.36);
        }

        .scl-product-submenu ul {
            gap: 14px;
            padding: 6px 6px;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .scl-product-submenu li a {
            padding: 12px 16px;
            font-size: 14px;
        }

        .scl-intro__figure {
            position: absolute;
            left: 8px;
            top: auto;
            bottom: 4%;
            width: clamp(140px, 38vw, 300px);
            max-width: 38%;
            height: auto;
        }

        .scl-intro__floating-image {
            position: relative;
            width: 100%;
            height: auto;
            transform: none !important;
        }

        .scl-intro__explore {
            bottom: 14px;
        }

        /* Benefits */
        .scl-benefits-section {
            padding: 90px 15px;
        }

        .scl-benefit-image {
            height: 360px;
        }

        .scl-benefit-content {
            padding: 60px 40px;
        }

        .scl-benefits-header h2 {
            font-size: 2.6rem;
        }

        /* News */
        .scl-posts-container {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 640px) {
        .scl-counter {
            font-size: 4.8rem;
        }
    }

    @media (max-width: 600px) {

        /* CTA */
        .scl-plain-title {
            font-size: 36px;
        }

        .scl-plain-text {
            font-size: 18px;
        }

        .scl-plain-btn {
            font-size: 17px;
            padding: 14px 26px;
        }
    }

    @media (max-width: 480px) {

        /* Intro */
        .scl-intro__content {
            padding: 20px 12px;
        }

        .scl-intro__title {
            margin-bottom: 18px;
            font-size: clamp(20px, 10.8vw, 36px);
        }

        .scl-intro__subtitle {
            margin-bottom: 14px;
            font-size: 14px;
        }

        .scl-product-submenu ul {
            gap: 12px;
        }

        .scl-product-submenu li a {
            padding: 10px 12px;
            font-size: 12px;
        }

        .scl-intro__figure {
            width: clamp(120px, 42vw, 220px);
            left: 6px;
            bottom: 2%;
        }

        /* Benefits */
        .scl-benefit-image {
            height: 300px;
        }

        .scl-benefit-content {
            padding: 50px 30px;
        }

        .scl-btn-primary {
            padding: 18px 48px;
            font-size: 1.2rem;
        }

        /* Counters */
        .scl-counter {
            font-size: 3.8rem;
        }

        /* News */
        .scl-posts-container {
            grid-template-columns: 1fr;
        }
    }

    @media (min-width: 768px) {
        .scl-counter-text {
            font-size: 1.15rem;
        }
    }

    /* Touch devices: reduce hover motion and make tap interactions nicer */
    @media (pointer: coarse) {
        .scl-product-submenu li a {
            transition: opacity 140ms ease;
        }

        .scl-product-submenu li a:active {
            transform: translateY(0);
            opacity: .95;
        }

        .scl-intro__figure:hover .scl-intro__floating-image {
            transform: none;
        }
    }

    /* Respect reduced motion */
    @media (prefers-reduced-motion: reduce) {

        .scl-intro__figure:hover .scl-intro__floating-image,
        .scl-product-submenu li a:hover,
        .scl-intro__explore:hover .scl-intro__explore-circle {
            transition: none !important;
            transform: none !important;
        }

        *,
        *::before,
        *::after {
            transition: none !important;
            animation: none !important;
        }

        .scl-plain-title,
        .scl-plain-text,
        .scl-plain-btn {
            transition: none !important;
            transform: none !important;
            opacity: 1 !important;
        }
    }
    </style>
</head>

<body>
    <section class="scl-intro scl-intro--hero" aria-label="Hero Section">
        <div class="scl-intro__bg"></div>
        <div class="scl-intro__content">
            <h1 class="scl-intro__title">Custom Game Development and Design Services</h1>
            <p class="scl-intro__subtitle">
                Source Code Lab, a leading custom game development company, specializes in designing bespoke gaming
                solutions for Android, iOS, and web platforms.
            </p>
            <nav class="scl-product-submenu" aria-label="Product submenu">
                <ul>
                    <li class="active"><a href="https://sourcecodelab.co/overview/" tabindex="0"
                            aria-current="page">Overview</a></li>
                    <li><a href="https://sourcecodelab.co/platform/" tabindex="0">Development Roadmap</a></li>
                    <li><a href="https://sourcecodelab.co/integration/" tabindex="0">Tech Stack &amp; Architecture</a>
                    </li>
                    <li><a href="https://sourcecodelab.co/business-model/" tabindex="0">Monetization &amp; Legal</a>
                    </li>
                    <li><a href="https://sourcecodelab.co/clients/" tabindex="0">Launch &amp; Growth</a></li>
                </ul>
            </nav>
        </div>
        <figure class="scl-intro__figure" aria-hidden="true">
            <img decoding="async" class="scl-intro__floating-image"
                src="https://sourcecodelab.co/wp-content/uploads/2025/03/custom-game.webp" alt="">
        </figure>
        <a class="scl-intro__explore" href="#our-clients" aria-label="Explore more">
            <span class="scl-intro__explore-circle" aria-hidden="true"></span>
            <span class="scl-intro__explore-text">Explore more</span>
        </a>
    </section>

    <section class="scl-benefits-section">
        <div class="scl-benefits-glow-1"></div>
        <div class="scl-benefits-glow-2"></div>
        <div class="scl-benefits-container">
            <div class="scl-benefits-header">
                <h2>Benefits of Choosing Our Custom Game Development and Design Services</h2>
                <p>We deliver cutting-edge, high-performance gaming solutions with stunning visuals, seamless
                    functionality, and unmatched player engagement across all platforms.</p>
            </div>
            <div class="scl-benefits-slider" id="benefitsSlider">
                <div class="scl-benefits-track" id="track" style="transform: translateX(-300%);">
                    <div class="scl-benefit-card">
                        <div class="scl-benefit-image">
                            <img decoding="async"
                                src="https://sourcecodelab.co/wp-content/uploads/2025/03/inuque-theme-ui-ux.webp"
                                alt="Unique Themes &amp; UI/UX">
                        </div>
                        <div class="scl-benefit-content">
                            <h3>Unique Themes &amp; UI/UX</h3>
                            <p>Customize your game with distinct themes, stunning aesthetics, and superior UI/UX for a
                                visually appealing experience for players.</p>
                        </div>
                    </div>
                    <div class="scl-benefit-card">
                        <div class="scl-benefit-image">
                            <img decoding="async"
                                src="https://sourcecodelab.co/wp-content/uploads/2025/03/Immersive-Special-Effects.webp"
                                alt="Immersive Special Effects">
                        </div>
                        <div class="scl-benefit-content">
                            <h3>Immersive Special Effects</h3>
                            <p>With high-quality special effects designed by our team of experts to create a dynamic
                                gaming experience.</p>
                        </div>
                    </div>
                    <div class="scl-benefit-card">
                        <div class="scl-benefit-image">
                            <img decoding="async"
                                src="https://sourcecodelab.co/wp-content/uploads/2025/03/Cross-Platform-Compatibility.webp"
                                alt="Cross-Platform Compatibility">
                        </div>
                        <div class="scl-benefit-content">
                            <h3>Cross-Platform Compatibility</h3>
                            <p>Develop games that run smoothly on desktops, web, and mobile devices, allowing players to
                                access the game anytime, anywhere.</p>
                        </div>
                    </div>
                    <div class="scl-benefit-card">
                        <div class="scl-benefit-image">
                            <img decoding="async"
                                src="https://sourcecodelab.co/wp-content/uploads/2025/03/Custom-Readymade-Games.webp"
                                alt="Custom &amp; Readymade Games">
                        </div>
                        <div class="scl-benefit-content">
                            <h3>Custom &amp; Readymade Games</h3>
                            <p>Choose between fully customized games or ready-made solutions, which can be tailored and
                                launched quickly to meet market demands.</p>
                        </div>
                    </div>
                    <div class="scl-benefit-card">
                        <div class="scl-benefit-image">
                            <img decoding="async"
                                src="https://sourcecodelab.co/wp-content/uploads/2025/03/Expert-Led-Game-Creation.webp"
                                alt="Expert-Led Game Creation">
                        </div>
                        <div class="scl-benefit-content">
                            <h3>Expert-Led Game Creation</h3>
                            <p>Our dedicated game developers handle everything from conceptualization to design,
                                development, and QA, delivering a high-quality, fully optimized game tailored to your
                                needs.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scl-benefits-dots" id="dots">
                <div class="scl-dot"></div>
                <div class="scl-dot"></div>
                <div class="scl-dot"></div>
                <div class="scl-dot active"></div>
                <div class="scl-dot"></div>
            </div>
            <div class="scl-benefits-cta">
                <a href="https://sourcecodelab.co/contact-us/" class="scl-btn-primary">Let’s Build Your Game Today!</a>
            </div>
        </div>
    </section>

    <section id="scl-product-features" class="scl-section-padding scl-relative scl-overflow-hidden">
        <div class="scl-absolute scl-inset-0 scl-pointer-events-none">
            <div
                class="scl-glow-1 scl-w-96 scl-h-96 scl-bg-[#23B04E] scl-rounded-full scl-filter scl-blur-3xl scl-opacity-20 scl-animate-pulse">
            </div>
            <div
                class="scl-glow-2 scl-w-80 scl-h-80 scl-bg-green-400 scl-rounded-full scl-filter scl-blur-3xl scl-opacity-10 scl-animate-pulse">
            </div>
            <div class="scl-glow-3 scl-w-full scl-h-96 scl-bg-[#23B04E]/5 scl-rounded-full scl-filter scl-blur-3xl">
            </div>
        </div>
        <div class="scl-container scl-relative scl-z-10">
            <div class="scl-header-section">
                <h2 class="scl-main-heading">Why Choose Our Sports Betting Software Solutions?</h2>
                <div class="scl-sub-heading-box">
                    <p class="scl-sub-heading-text">
                        Source Code Lab provides innovative sports betting software solutions that combine robust
                        security, seamless integration, and fully customizable features. Our platform is designed to
                        optimize your sports betting operations, offering a smooth, secure, and engaging experience for
                        both operators and players.
                    </p>
                </div>
            </div>
            <div class="scl-slider-wrapper">
                <div class="swiper scl-my-swiper-features swiper-initialized swiper-backface-hidden swiper-vertical">
                    <div class="swiper-wrapper" id="swiper-wrapper-e61db35ec3eb56510" aria-live="off"
                        style="transform: translate3d(0px, -3120px, 0px); transition-duration: 0ms; transition-delay: 0ms;">
                        <div class="swiper-slide scl-slide-active" role="group" aria-label="1 / 7"
                            style="height: 520px;" data-swiper-slide-index="0">
                            <div class="scl-slide-content-box">
                                <div class="scl-slide-text-area">
                                    <h3 class="scl-slide-title">High Security and Transparency</h3>
                                    <p class="scl-slide-description">Our software is built with advanced security
                                        protocols, ensuring safe transactions and data protection for operators and
                                        players alike. We prioritize transparency, providing clear auditing trails and
                                        compliance with industry standards.</p>
                                </div>
                                <div class="scl-slide-image-area">
                                    <img decoding="async"
                                        src="https://sourcecodelab.co/wp-content/uploads/2025/01/Group-1000008878.webp"
                                        alt="Sports Betting" class="scl-slide-image">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide scl-slide-next" role="group" aria-label="2 / 7" style="height: 520px;"
                            data-swiper-slide-index="1">
                            <div class="scl-slide-content-box">
                                <div class="scl-slide-text-area">
                                    <h3 class="scl-slide-title">Customizable Features</h3>
                                    <p class="scl-slide-description">Tailor your platform with on-demand customization
                                        to meet unique business needs and deliver a personalized betting experience.
                                        From betting types to player interfaces, our solution adapts to your vision.</p>
                                </div>
                                <div class="scl-slide-image-area">
                                    <img decoding="async"
                                        src="https://sourcecodelab.co/wp-content/uploads/2025/01/Group-1000008878.webp"
                                        alt="Sports Betting" class="scl-slide-image">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="3 / 7" style="height: 520px;"
                            data-swiper-slide-index="2">
                            <div class="scl-slide-content-box">
                                <div class="scl-slide-text-area">
                                    <h3 class="scl-slide-title">Seamless Integration</h3>
                                    <p class="scl-slide-description">Easily integrate our software with third-party
                                        tools, APIs, and services to expand your platform’s capabilities without
                                        disruption.</p>
                                </div>
                                <div class="scl-slide-image-area">
                                    <img decoding="async"
                                        src="https://sourcecodelab.co/wp-content/uploads/2025/01/Group-1000008878.webp"
                                        alt="Sports Betting" class="scl-slide-image">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="4 / 7" style="height: 520px;"
                            data-swiper-slide-index="3">
                            <div class="scl-slide-content-box">
                                <div class="scl-slide-text-area">
                                    <h3 class="scl-slide-title">Omnichannel Compatibility</h3>
                                    <p class="scl-slide-description">Offer a consistent betting experience across
                                        desktop, mobile, and retail channels, ensuring accessibility for all users.</p>
                                </div>
                                <div class="scl-slide-image-area">
                                    <img decoding="async"
                                        src="https://sourcecodelab.co/wp-content/uploads/2025/01/Group-1000008878.webp"
                                        alt="Sports Betting" class="scl-slide-image">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="5 / 7" style="height: 520px;"
                            data-swiper-slide-index="4">
                            <div class="scl-slide-content-box">
                                <div class="scl-slide-text-area">
                                    <h3 class="scl-slide-title">Player-Centric Experience</h3>
                                    <p class="scl-slide-description">Create an engaging and intuitive betting platform
                                        designed to enhance user satisfaction and retention.</p>
                                </div>
                                <div class="scl-slide-image-area">
                                    <img decoding="async"
                                        src="https://sourcecodelab.co/wp-content/uploads/2025/01/Group-1000008878.webp"
                                        alt="Sports Betting" class="scl-slide-image">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="6 / 7" style="height: 520px;"
                            data-swiper-slide-index="5">
                            <div class="scl-slide-content-box">
                                <div class="scl-slide-text-area">
                                    <h3 class="scl-slide-title">Global Market Coverage</h3>
                                    <p class="scl-slide-description">Access a wide range of sports and markets from
                                        around the globe, catering to diverse audience preferences.</p>
                                </div>
                                <div class="scl-slide-image-area">
                                    <img decoding="async"
                                        src="https://sourcecodelab.co/wp-content/uploads/2025/01/Group-1000008878.webp"
                                        alt="Sports Betting" class="scl-slide-image">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide scl-slide-prev" role="group" aria-label="7 / 7" style="height: 520px;"
                            data-swiper-slide-index="6">
                            <div class="scl-slide-content-box">
                                <div class="scl-slide-text-area">
                                    <h3 class="scl-slide-title">24/7 Technical Support</h3>
                                    <p class="scl-slide-description">Our dedicated support team is available around the
                                        clock to assist with any technical issues or queries, ensuring your platform
                                        operates smoothly at all times.</p>
                                </div>
                                <div class="scl-slide-image-area">
                                    <img decoding="async"
                                        src="https://sourcecodelab.co/wp-content/uploads/2025/01/Group-1000008878.webp"
                                        alt="Sports Betting" class="scl-slide-image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-vertical">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="scl-glow-bg scl-py-20 lg:scl-py-32 scl-relative">
        <div class="scl-orb-1 scl-glow-orb"></div>
        <div class="scl-orb-2 scl-glow-orb"></div>
        <div class="scl-orb-3 scl-glow-orb"></div>
        <div class="scl-max-w-7xl scl-mx-auto scl-px-6 lg:scl-px-8 scl-relative scl-z-10">
            <div class="scl-text-center scl-mb-16">
                <h2
                    class="scl-text-5xl md:scl-text-6xl lg:scl-text-7xl scl-font-black scl-text-gray-900 scl-mb-6 scl-leading-tight">
                    How Does Opinion Trading Game Work?
                </h2>
                <p class="scl-text-xl md:scl-text-2xl scl-text-gray-700 scl-max-w-5xl scl-mx-auto scl-leading-relaxed">
                    Opinion trading game development software presents participants with poll-based questions, allowing
                    them to place their predictions about real-world events and trade opinions.
                </p>
                <p class="scl-mt-6 scl-text-2xl scl-font-bold scl-text-gray-800">How It Works:</p>
            </div>
            <div class="scl-grid scl-grid-cols-1 md:scl-grid-cols-2 scl-gap-12 lg:scl-gap-16">
                <div class="scl-step-card scl-p-10">
                    <div class="scl-flex scl-items-start scl-gap-8">
                        <div class="scl-step-number">1</div>
                        <div>
                            <h3 class="scl-text-3xl lg:scl-text-4xl scl-font-bold scl-text-gray-900 scl-mb-5">Choose a
                                Match</h3>
                            <p class="scl-text-gray-600 scl-leading-relaxed scl-text-lg">
                                Participants select topics of interest and respond to statements or questions by
                                assigning a percentage value to their predictions. For instance, they might predict
                                whether a specific sports team will win a match or if a cryptocurrency will reach a
                                certain price.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="scl-step-card scl-p-10">
                    <div class="scl-flex scl-items-start scl-gap-8">
                        <div class="scl-step-number">2</div>
                        <div>
                            <h3 class="scl-text-3xl lg:scl-text-4xl scl-font-bold scl-text-gray-900 scl-mb-5">Is it a
                                Yes or a No?</h3>
                            <p class="scl-text-gray-600 scl-leading-relaxed scl-text-lg">
                                Users can predict the most probable outcome for a selected question and place their
                                order. The software further uses an order-matching system, often powered by algorithms
                                that balance the total bets on "Yes" and "No" options.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="scl-step-card scl-p-10">
                    <div class="scl-flex scl-items-start scl-gap-8">
                        <div class="scl-step-number">3</div>
                        <div>
                            <h3 class="scl-text-3xl lg:scl-text-4xl scl-font-bold scl-text-gray-900 scl-mb-5">Real-Time
                                Updates</h3>
                            <p class="scl-text-gray-600 scl-leading-relaxed scl-text-lg">
                                Change your opinion or invest more quantities on an already placed order in real-time.
                                Those who accurately forecast outcomes can earn rewards.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="scl-step-card scl-p-10">
                    <div class="scl-flex scl-items-start scl-gap-8">
                        <div class="scl-step-number">4</div>
                        <div>
                            <h3 class="scl-text-3xl lg:scl-text-4xl scl-font-bold scl-text-gray-900 scl-mb-5">Check
                                Quantities Status</h3>
                            <p class="scl-text-gray-600 scl-leading-relaxed scl-text-lg">
                                Monitor if the ordered quantities are matched. Cancel unmatched quantities for instant
                                refunds, ensuring that the betting environment remains fair and engaging for all
                                participants.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scl-example-box">
                <p
                    class="scl-text-xl lg:scl-text-2xl scl-text-gray-700 scl-leading-relaxed scl-text-center scl-italic scl-font-medium">
                    <strong>For example</strong>, a user might encounter a question like,<br>
                    <strong class="scl-text-3xl scl-text-green-600">“Will Team A win the championship this
                        season?”</strong><br><br>
                    Participants can respond by assigning a percentage likelihood to their prediction, such as
                    <strong>70% for “Yes”</strong> and <strong>30% for “No.”</strong> Once they place their bets, the
                    software aggregates all predictions and displays the overall sentiment of the community.
                </p>
                <p class="scl-mt-10 scl-text-xl lg:scl-text-2xl scl-text-gray-800 scl-text-center scl-font-semibold">
                    When the championship concludes, users who correctly predicted the outcome earn rewards based on
                    their initial bets and the odds at which they placed them.
                </p>
            </div>
            <div class="scl-text-center">
                <a href="https://sourcecodelab.co/contact-us/" class="scl-cta-btn">
                    Let’s Build Your Game Today!
                </a>
            </div>
        </div>
    </section>

    <section class="scl-py-20 md:scl-py-28 scl-bg-cyan-500">
        <div class="scl-max-w-7xl scl-mx-auto scl-px-6 scl-text-center">
            <h2
                class="scl-text-center scl-text-5xl md:scl-text-6xl lg:scl-text-7xl scl-font-black scl-text-white scl-mb-20 md:scl-mb-28 lg:scl-mb-36 scl-pb-8 md:scl-pb-12 scl-border-b-4 scl-border-white/30 scl-inline-block">
                Highlights of Our Achievements
            </h2>
            <div
                class="scl-grid scl-grid-cols-1 sm:scl-grid-cols-2 lg:scl-grid-cols-4 scl-gap-8 md:scl-gap-12 lg:scl-gap-16">
                <div class="scl-glass-card scl-p-10 scl-text-center">
                    <div class="scl-counter scl-text-white scl-mb-3" data-target="250">250+</div>
                    <p class="scl-counter-text scl-text-white">
                        Overall Project
                    </p>
                </div>
                <div class="scl-glass-card scl-p-10 scl-text-center">
                    <div class="scl-counter scl-text-white scl-mb-3" data-target="60">60+</div>
                    <p class="scl-counter-text scl-text-white">
                        Year of Combined Experience
                    </p>
                </div>
                <div class="scl-glass-card scl-p-10 scl-text-center">
                    <div class="scl-counter scl-text-white scl-mb-3" data-target="50">50+</div>
                    <p class="scl-counter-text scl-text-white">
                        Countries Served
                    </p>
                </div>
                <div class="scl-glass-card scl-p-10 scl-text-center">
                    <div class="scl-counter scl-text-white scl-mb-3" data-target="20">20+</div>
                    <p class="scl-counter-text scl-text-white">
                        Countries
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="scl-features">
        <div class="scl-glow-orb-1"></div>
        <div class="scl-glow-orb-2"></div>
        <div class="scl-glow-orb-3"></div>
        <div class="scl-section-header">
            <h2>Bonuses &amp; Payment Solutions</h2>
            <p>Source Code Lab offers flexible payment options along with keeping players engaged with bonuses,
                challenges and rewards for driving participation and long-term retention.</p>
        </div>
        <div class="scl-block">
            <div class="scl-img"><img decoding="async"
                    src="https://sourcecodelab.co/wp-content/uploads/2025/03/Fiat-Crypto-Payments.webp"
                    alt="Fiat &amp; Crypto Payments"></div>
            <div class="scl-text">
                <h2>Fiat &amp; Crypto Payments</h2>
                <p>Enable secure and hassle-free transactions in fiat, cryptocurrency, and custom token systems.</p>
            </div>
        </div>
        <div class="scl-block">
            <div class="scl-img"><img decoding="async"
                    src="https://sourcecodelab.co/wp-content/uploads/2025/03/Multiple-Payment-Gateways.webp"
                    alt="Multiple Payment Gateways"></div>
            <div class="scl-text">
                <h2>Multiple Payment Gateways</h2>
                <p>Integrate various payment methods for quick and smooth transactions.</p>
            </div>
        </div>
        <div class="scl-block">
            <div class="scl-img"><img decoding="async"
                    src="https://sourcecodelab.co/wp-content/uploads/2025/03/Daily-Weekly-Goals.webp"
                    alt="Daily &amp; Weekly Goals"></div>
            <div class="scl-text">
                <h2>Daily &amp; Weekly Goals</h2>
                <p>Boost engagement with reward-driven gaming challenges.</p>
            </div>
        </div>
        <div class="scl-block">
            <div class="scl-img"><img decoding="async"
                    src="https://sourcecodelab.co/wp-content/uploads/2025/03/Referral-Rewards.webp"
                    alt="Referral Rewards"></div>
            <div class="scl-text">
                <h2>Referral Rewards</h2>
                <p>Players earn bonuses for referring new users after their first transaction.</p>
            </div>
        </div>
        <div class="scl-block">
            <div class="scl-img"><img decoding="async"
                    src="https://sourcecodelab.co/wp-content/uploads/2025/03/Buddy-Invitation.webp"
                    alt="Buddy Invitation"></div>
            <div class="scl-text">
                <h2>Buddy Invitation</h2>
                <p>Allow players to invite friends and compete together.</p>
            </div>
        </div>
    </section>

    <div class="scl-news-container">
        <div class="scl-news-header">
            <div class="scl-icon-box-wrapper">
                <div class="scl-icon-box-content">
                    <h3 class="scl-icon-box-title">
                        <span>Latest news &amp; events</span>
                    </h3>
                    <p class="scl-icon-box-description">
                        Discover the latest updates, press releases, and expert insights from our Knowledge Base — your
                        ultimate guide to thriving in the iGaming industry.
                    </p>
                </div>
            </div>
        </div>
        <div class="scl-posts-grid-container">
            <div class="scl-posts-container">
                <article class="scl-post-item">
                    <a class="scl-post__thumbnail__link"
                        href="http://localhost/sourcecodelab/2025/10/24/comparing-igaming-white-label-and-custom-casino-solutions/"
                        tabindex="-1" target="_blank">
                        <div class="scl-post__thumbnail"><img fetchpriority="high" decoding="async" width="1920"
                                height="1080"
                                src="http://localhost/sourcecodelab/wp-content/uploads/2025/10/image1-8.jpg"
                                class="scl-post-img" alt=""></div>
                    </a>
                    <div class="scl-post__text">
                        <h3 class="scl-post__title">
                            <a href="http://localhost/sourcecodelab/2025/10/24/comparing-igaming-white-label-and-custom-casino-solutions/"
                                target="_blank">
                                Comparing iGaming White Label and Custom Casino Solutions
                            </a>
                        </h3>
                        <div class="scl-post__meta-data">
                            <span class="scl-post-date">October 24, 2025</span>
                            <span class="scl-post-comments">No Comments</span>
                        </div>
                        <div class="scl-post__excerpt">
                            <p>The iGaming industry is experiencing an unprecedented boom. In 2024, the global market
                                was valued</p>
                        </div>
                        <a class="scl-post__read-more"
                            href="http://localhost/sourcecodelab/2025/10/24/comparing-igaming-white-label-and-custom-casino-solutions/"
                            aria-label="Read more about Comparing iGaming White Label and Custom Casino Solutions"
                            tabindex="-1" target="_blank">Read More »</a>
                    </div>
                </article>
                <article class="scl-post-item">
                    <a class="scl-post__thumbnail__link"
                        href="http://localhost/sourcecodelab/2025/10/23/sigma-asia-summit-manila-2025-source-code-lab/"
                        tabindex="-1" target="_blank">
                        <div class="scl-post__thumbnail"><img decoding="async" width="1920" height="1080"
                                src="http://localhost/sourcecodelab/wp-content/uploads/2025/10/12.jpg"
                                class="scl-post-img" alt=""></div>
                    </a>
                    <div class="scl-post__text">
                        <h3 class="scl-post__title">
                            <a href="http://localhost/sourcecodelab/2025/10/23/sigma-asia-summit-manila-2025-source-code-lab/"
                                target="_blank">
                                Sigma Asia Summit (Manila) 2025 – Source Code Lab
                            </a>
                        </h3>
                        <div class="scl-post__meta-data">
                            <span class="scl-post-date">October 23, 2025</span>
                            <span class="scl-post-comments">No Comments</span>
                        </div>
                        <div class="scl-post__excerpt">
                            <p>Asia is one of the fastest-growing regions for online gaming, particularly in areas like
                                the</p>
                        </div>
                        <a class="scl-post__read-more"
                            href="http://localhost/sourcecodelab/2025/10/23/sigma-asia-summit-manila-2025-source-code-lab/"
                            aria-label="Read more about Sigma Asia Summit (Manila) 2025 – Source Code Lab" tabindex="-1"
                            target="_blank">Read More »</a>
                    </div>
                </article>
                <article class="scl-post-item">
                    <a class="scl-post__thumbnail__link"
                        href="http://localhost/sourcecodelab/2025/08/11/sigma-asia-summit-manila-2025-source-code-lab-2/"
                        tabindex="-1" target="_blank">
                        <div class="scl-post__thumbnail"><img decoding="async" width="1920" height="1080"
                                src="http://localhost/sourcecodelab/wp-content/uploads/2025/10/image3-3.jpg"
                                class="scl-post-img" alt=""></div>
                    </a>
                    <div class="scl-post__text">
                        <h3 class="scl-post__title">
                            <a href="http://localhost/sourcecodelab/2025/08/11/sigma-asia-summit-manila-2025-source-code-lab-2/"
                                target="_blank">
                                Sigma Asia Summit (Manila) 2025 – Source Code Lab
                            </a>
                        </h3>
                        <div class="scl-post__meta-data">
                            <span class="scl-post-date">August 11, 2025</span>
                            <span class="scl-post-comments">No Comments</span>
                        </div>
                        <div class="scl-post__excerpt">
                            <p>Asia is one of the fastest-growing regions for online gaming, particularly in areas like
                                the</p>
                        </div>
                        <a class="scl-post__read-more"
                            href="http://localhost/sourcecodelab/2025/08/11/sigma-asia-summit-manila-2025-source-code-lab-2/"
                            aria-label="Read more about Sigma Asia Summit (Manila) 2025 – Source Code Lab" tabindex="-1"
                            target="_blank">Read More »</a>
                    </div>
                </article>
            </div>
            <div class="scl-load-more-btn-wrapper">
                <a class="scl-load-more-btn" role="button">
                    <span class="scl-button-text">Load More</span>
                    <span class="scl-load-more-spinner">
                    </span>
                </a>
            </div>
        </div>
    </div>

    <section class="scl-plain-cta" aria-labelledby="scl-cta-title">
        <div class="scl-plain-inner">
            <h2 id="scl-cta-title" class="scl-plain-title">Start Your Custom Game Development Journey Now!</h2>
            <p class="scl-plain-text">Let’s work together to create a custom game that exceeds expectations. Contact us
                for a comprehensive development experience that turns your concept into a captivating reality</p>
            <a class="scl-plain-btn" href="https://sourcecodelab.co/contact-us/">Get Started</a>
        </div>
    </section>

    <section class="scl-faq-section scl-py-24 lg:scl-py-32 scl-relative scl-z-10">
        <div class="scl-faq-glow scl-glow-1"></div>
        <div class="scl-faq-glow scl-glow-2"></div>
        <div class="scl-faq-glow scl-glow-3"></div>
        <div class="scl-max-w-5xl scl-mx-auto scl-px-6 lg:scl-px-8">
            <div class="scl-text-center scl-mb-20">
                <h2
                    class="scl-text-5xl sm:scl-text-6xl lg:scl-text-7xl scl-font-black scl-text-slate-900 scl-leading-tight scl-tracking-tight">
                    Frequently Asked <span class="scl-text-cyan-600">Questions</span>
                </h2>
                <p class="scl-mt-6 scl-text-lg scl-text-slate-600 scl-max-w-2xl scl-mx-auto">
                    Everything you need to know about our Custom Game Development Services
                </p>
            </div>
            <div class="scl-space-y-8">
                <div class="scl-faq-item">
                    <div class="scl-faq-question">
                        <span>1. What technologies do you use for game development?</span>
                        <svg class="scl-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                    <div class="scl-faq-answer">
                        <p class="scl-text-slate-700">
                            Our technology stack includes industry-leading tools and frameworks such as <strong>Unity,
                                Unreal Engine, C#, C++, JavaScript,</strong> and various <strong>AR/VR SDKs</strong>.
                        </p>
                    </div>
                </div>
                <div class="scl-faq-item">
                    <div class="scl-faq-question">
                        <span>2. Which platforms do you develop games for?</span>
                        <svg class="scl-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                    <div class="scl-faq-answer">
                        <p class="scl-text-slate-700">
                            We develop games for multiple platforms including <strong>mobile (iOS and Android), PC, web
                                browsers, AR/VR headsets, and game consoles</strong>. We also create cross-platform
                            games that can be played across different devices.
                        </p>
                    </div>
                </div>
                <div class="scl-faq-item">
                    <div class="scl-faq-question">
                        <span>3. How long does it take to develop a game?</span>
                        <svg class="scl-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                    <div class="scl-faq-answer">
                        <p class="scl-text-slate-700">
                            Development time varies greatly depending on the complexity and scope of the game. A simple
                            mobile game might take <strong>3–6 months</strong>, while a more complex 3D game could take
                            <strong>a year or more</strong>. During our initial consultation, we'll provide a more
                            accurate timeline based on your specific project requirements.
                        </p>
                    </div>
                </div>
                <div class="scl-faq-item">
                    <div class="scl-faq-question">
                        <span>4. Do you offer post-launch support and updates?</span>
                        <svg class="scl-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                    <div class="scl-faq-answer">
                        <p class="scl-text-slate-700">
                            Absolutely! We provide <strong>ongoing support and maintenance</strong> after your game
                            launches. This includes <strong>bug fixes, performance optimizations, content updates, user
                                analytics</strong> and implementing new features based on player feedback.
                        </p>
                    </div>
                </div>
                <div class="scl-faq-item">
                    <div class="scl-faq-question">
                        <span>5. How do you ensure the security of iGaming and real money game platforms?</span>
                        <svg class="scl-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                    <div class="scl-faq-answer">
                        <p class="scl-text-slate-700">
                            Security is a top priority, especially for iGaming solutions. We implement <strong>robust
                                encryption, secure payment gateways, and fraud detection systems</strong>. Our platforms
                            comply with relevant gambling regulations and undergo <strong>rigorous testing for data
                                protection</strong>.
                        </p>
                    </div>
                </div>
                <div class="scl-faq-item">
                    <div class="scl-faq-question">
                        <span>6. Do you provide full ownership of custom casino games?</span>
                        <svg class="scl-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                    <div class="scl-faq-answer">
                        <p class="scl-text-slate-700">
                            Yes, <strong>Source Code Lab grants 100% ownership</strong> of the custom casino games we
                            develop for you, including <strong>access to source code, player data, and all essential
                                information</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {

        // 1. Hero Section: Keyboard Navigation and A11y
        (function() {
            var submenu = document.querySelector('.scl-product-submenu ul');
            if (submenu) {
                var links = [...submenu.querySelectorAll('a')];
                links.forEach(l => l.setAttribute('tabindex', '0'));
                submenu.addEventListener('keydown', function(e) {
                    var i = links.indexOf(document.activeElement);
                    if (e.key === 'ArrowRight') {
                        e.preventDefault();
                        links[(i + 1) % links.length].focus();
                    }
                    if (e.key === 'ArrowLeft') {
                        e.preventDefault();
                        links[(i - 1 + links.length) % links.length].focus();
                    }
                });
                var active = submenu.querySelector('li.active a');
                if (active) active.setAttribute('aria-current', 'page');
            }
        })();

        // 2. Benefits Slider Section: Manual and Auto Sliding
        (function() {
            const track = document.getElementById('track');
            const dotsContainer = document.getElementById('dots');
            const slides = document.querySelectorAll('.scl-benefit-card');
            let current = 0;
            const total = slides.length;

            // Create dots (if they weren't fully in HTML)
            // Note: The original HTML had the dots, but this logic ensures correct functionality
            if (dotsContainer.children.length === 0) {
                for (let i = 0; i < total; i++) {
                    const dot = document.createElement('div');
                    dot.className = 'scl-dot' + (i === 0 ? ' active' : '');
                    dot.onclick = () => goTo(i);
                    dotsContainer.appendChild(dot);
                }
            }
            const dots = document.querySelectorAll('.scl-dot');

            function goTo(index) {
                current = index;
                if (track) {
                    track.style.transform = `translateX(-${current * 100}%)`;
                }
                dots.forEach((d, i) => d.classList.toggle('active', i === current));
            }

            // Set initial active state based on the element
            let initialActive = Array.from(dots).findIndex(d => d.classList.contains('active'));
            current = initialActive >= 0 ? initialActive : 0;
            if (track) {
                track.style.transform = `translateX(-${current * 100}%)`;
            }

            function next() {
                current = (current + 1) % total;
                goTo(current);
            }

            // Clear initial auto and set a new one to prevent double running
            let auto = setInterval(next, 6000);

            const slider = document.getElementById('benefitsSlider');
            if (slider) {
                slider.addEventListener('mouseenter', () => clearInterval(auto));
                slider.addEventListener('mouseleave', () => auto = setInterval(next, 6000));
            }

            // Touch swipe
            let startX;
            if (track && track.parentElement) {
                track.parentElement.addEventListener('touchstart', e => startX = e.touches[0].clientX);
                track.parentElement.addEventListener('touchend', e => {
                    if (!startX) return;
                    const endX = e.changedTouches[0].clientX;
                    if (startX - endX > 50) next();
                    if (endX - startX > 50) goTo((current - 1 + total) % total);
                    startX = null;
                });
            }

        })();

        // 3. Sports Betting Features Slider: Swiper Initialization
        // Ensure Swiper library is loaded before this runs
        if (typeof Swiper !== 'undefined') {
            new Swiper(".scl-my-swiper-features", {
                loop: true,
                speed: 800,
                grabCursor: true,
                autoplay: {
                    delay: 6000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                direction: "horizontal",
                breakpoints: {
                    1280: {
                        direction: "vertical"
                    }
                }
            });
        }

        // 5. Achievement Counters Section: Smooth Counter Animation on Scroll
        (function() {
            const counters = document.querySelectorAll('.scl-counter');
            let counted = false;
            const startCounting = () => {
                if (counted) return;
                counted = true;
                counters.forEach(counter => {
                    const target = +counter.getAttribute('data-target');
                    let count = 0;
                    const increment = target / 90;
                    const timer = setInterval(() => {
                        count += increment;
                        if (count >= target) {
                            counter.textContent = target + '+';
                            clearInterval(timer);
                        } else {
                            counter.textContent = Math.floor(count) + '+';
                        }
                    }, 25);
                });
            };

            const section = document.querySelector(
                '.scl-py-20.md\\:scl-py-28.scl-bg-cyan-500'); // Targeted the container section

            if (section) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            startCounting();
                            observer.unobserve(section);
                        }
                    });
                }, {
                    threshold: 0.2
                });

                observer.observe(section);
            }
        })();

        // 8. Start Your Journey CTA Section: Intersection Observer for Animation
        (function() {
            const section = document.querySelector('.scl-plain-cta');
            if (!section) return;
            const io = new IntersectionObserver((entries) => {
                entries.forEach(e => {
                    if (e.isIntersecting) {
                        section.classList.add('scl-inview');
                        io.disconnect();
                    }
                });
            }, {
                threshold: .2
            });
            io.observe(section);
        })();

        // 9. FAQ Section: Accordion Functionality
        (function() {
            document.querySelectorAll('.scl-faq-question').forEach(item => {
                item.addEventListener('click', () => {
                    const answer = item.nextElementSibling;
                    const icon = item.querySelector('.scl-faq-icon');
                    answer.classList.toggle('open');
                    icon.classList.toggle('rotate');

                    // Close others
                    document.querySelectorAll('.scl-faq-answer').forEach(other => {
                        if (other !== answer && other.classList.contains('open')) {
                            other.classList.remove('open');
                            const otherIcon = other.previousElementSibling
                                .querySelector('.scl-faq-icon');
                            if (otherIcon) otherIcon.classList.remove('rotate');
                        }
                    });
                });
            });
        })();
    });
    </script>
</body>

</html>
<?php get_footer(); ?>