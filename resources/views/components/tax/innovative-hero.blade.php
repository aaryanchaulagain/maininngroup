@php
    $heroDesktop = 'https://innovativeassociates.com.au/wp-content/uploads/2021/05/slider-1-2.jpg';
    $heroMobile = 'https://innovativeassociates.com.au/wp-content/uploads/2021/05/mobilebg.jpg';
@endphp

<section class="inn-hero relative min-h-screen w-full">
    <div
        class="inn-hero__bg absolute inset-0 bg-cover bg-center bg-no-repeat md:hidden"
        style="background-image: url('{{ $heroMobile }}');"
    ></div>
    <div
        class="inn-hero__bg absolute inset-0 hidden bg-cover bg-center bg-no-repeat md:block"
        style="background-image: url('{{ $heroDesktop }}');"
    ></div>
    <div class="inn-hero__overlay absolute inset-0"></div>

    <div class="inn-hero__content relative z-[2] flex min-h-screen flex-col items-center justify-center px-[15px] pb-[60px] pt-[100px] text-center">
        <p class="inn-hero__eyebrow">Business For Your business</p>
        <h1 class="inn-hero__title">Innovative Associates</h1>
        <p class="inn-hero__subtitle">
            We are committed to providing our customers with exceptional service while offering our employees the best training.
        </p>
        <a href="{{ route('tax.aboutus') }}" class="inn-hero__btn">About Us</a>
    </div>
</section>
