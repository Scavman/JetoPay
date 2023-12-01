@extends('layouts.app')

@section('content')
    <div class="div" style="background-image: url('/img/background_top.png')">
        <div class="div-2">
            <div class="div-3">
                <div class="div-4">
                    <img
                        loading="lazy"
                        srcset="/img/logo.png"
                        class="img-2"
                    />
                    <div class="div-5" id="div-5">
                        <a href="#aboutus"><div class="div-6">COMPANY</div></a>
                        <a href="#advantages"><div class="div-7">ADVANTAGES</div></a>
                        <a href="#services"><div class="div-8">SERVICES</div></a>
                    </div>
                    <div class="div-9" id="div-9">
                        {{--<div class="div-10">Sign In</div>--}}
                        <a href="#contactus"><div class="div-11">Contact Us</div></a>
                    </div>
                </div>
                <button type="button" class="navbar-toggler-front-show" onclick="
                                $('#div-5').css('display', 'flex');
                                $('#div-9').css('display', 'flex');
                                $('.navbar-toggler-front-show').css('display', 'none');
                                $('.navbar-toggler-front-hide').css('display', 'block');
                                ">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <button type="button" class="navbar-toggler-front-hide" onclick="
                                $('#div-5').css('display', 'none');
                                $('#div-9').css('display', 'none');
                                $('.navbar-toggler-front-show').css('display', 'block');
                                $('.navbar-toggler-front-hide').css('display', 'none');
                                ">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="div-12">
                    <div class="div-13">
                        <div class="column">
                            <div class="div-14">
                                <div class="div-15">
                                    Trusted Solution
                                    <br />
                                    for Automated
                                    <br />
                                    Payment Processing
                                </div>
                                <div class="div-16">
                                    JetoPay provides secure and fast payment processing services to
                                    improve merchants business performance, profits and customer
                                    satisfaction
                                </div>
                                <a href="#contactus"><div class="div-17">Contact Sales</div></a>
                            </div>
                        </div>
                        <div class="column-2">
                            <img
                                loading="lazy"
                                srcset="/img/header_image.png"
                                class="img-3"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="div-19">
            <div class="div-18" id="aboutus">About Us</div>
            <div class="div-20">
                <div class="column-3">
                    <div class="div-21">
                        <div class="div-22">Payment Solutions</div>
                        <div class="div-23">
                            We offer customizable and time-saving payment solutions in a secure
                            internal financial ecosystem. We prioritize security, transparency
                            and efficiency by leveraging technological advances to bring our
                            clients efficient processing solutions to boost their business and
                            performance
                        </div>
                    </div>
                </div>
                <div class="column-4">
                    <div class="div-24">
                        <div class="div-25">Our Goal</div>
                        <div class="div-26">
                            Our goal is to get the maximum benefit from technological
                            development. Our processing platform automatically and immediately
                            verifies the details of the sender, implements several security
                            measures to ensure fraud prevention and transparent operation, and
                            offers the highest confidentiality of the data processed
                        </div>
                    </div>
                </div>
                <div class="column-5">
                    <div class="div-27">
                        <div class="div-28">Our Team</div>
                        <div class="div-29">
                            Our team is led by fintech experts whose idea is to make payment
                            processing accessible to all industries and businesses. We designed
                            and implemented a cutting-edge customer-centric tool that enables
                            fast and secure payments, understanding the needs of the merchant
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="div-30">
            <div class="div-31">
                <div class="div-32" id="whytochooseus">Why To Choose Us?</div>
                <div class="div-33">
                    <div class="div-34">
                        <div class="column">
                            <div class="div-35">
                                <div class="div-36">
                                    <img
                                        loading="lazy"
                                        srcset="/img/arrow_img.png"
                                        class="img-4"
                                    />
                                    <div class="div-37">
                                        JetoPay has adopted a customer-centric and transparent
                                        approach that has made us a leader in payment processing
                                    </div>
                                </div>
                                <div class="div-38">
                                    <img
                                        loading="lazy"
                                        srcset="/img/arrow_img.png"
                                        class="img-5"
                                    />
                                    <div class="div-39">
                                        Our team of developers and fintech engineers always put the
                                        needs of our customers first and quickly find a suitable and
                                        secure solution for all customer requests
                                    </div>
                                </div>
                                <div class="div-40">
                                    <img
                                        loading="lazy"
                                        srcset="/img/arrow_img.png"
                                        class="img-6"
                                    />
                                    <div class="div-41">
                                        E-commerce, retail, gambling and betting, currency, foreign
                                        exchange, money transfer services, travel and leisure
                                        services, social services and tickets and many others find our
                                        company’s payment processing services accurate and useful
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column-6">
                            <img
                                loading="lazy"
                                srcset="/img/why_choose_us_img.png"
                                class="img-7"
                            />
                        </div>
                    </div>
                </div>
                <div class="div-42">
                    <div class="div-43">
                        <img
                            loading="lazy"
                            srcset="/img/headphones_img.png"
                            class="img-8"
                        />
                        <div class="div-44">Support 24/7</div>
                    </div>
                    <div class="div-45">
                        <img
                            loading="lazy"
                            srcset="/img/cashsack_img.png"
                            class="img-9"
                        />
                        <div class="div-46">Cost Effective</div>
                    </div>
                    <div class="div-47">
                        <img
                            loading="lazy"
                            srcset="/img/laptop_img.png"
                            class="img-10"
                        />
                        <div class="div-48">Portability</div>
                    </div>
                    <div class="div-49">
                        <img
                            loading="lazy"
                            srcset="/img/key_img.png"
                            class="img-11"
                        />
                        <div class="div-50">Security</div>
                    </div>
                    <div class="div-51">
                        <img
                            loading="lazy"
                            srcset="/img/checked_circle_img.png"
                            class="img-12"
                        />
                        <div class="div-52">Transparency</div>
                    </div>
                </div>
                <div class="div-53" id="advantages">Advantages</div>
                <div class="div-54">
                    <div class="div-55">
                        <div class="column-7">
                            <div class="div-56">
                                <div class="div-57">
                                    <div class="column-8">
                                        <img
                                            loading="lazy"
                                            srcset="/img/advantages_1.png"
                                            class="img-13"
                                        />
                                    </div>
                                    <div class="column-9">
                                        <div class="div-58">
                                            Our payment processing platform runs on existing
                                            infrastructure, which means businesses are offered a
                                            simplified setup process that reduces the cost of
                                            implementing a solution
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column-10">
                            <div class="div-59">
                                <div class="div-60">
                                    <div class="column-11">
                                        <img
                                            loading="lazy"
                                            srcset="/img/advantages_2.png"
                                            class="img-14"
                                        />
                                    </div>
                                    <div class="column-12">
                                        <div class="div-61">
                                            Our fintech, global payment and compliance experts, and team
                                            of developers are ready to help clients every step of the
                                            way as we prioritize the needs of our merchants
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="div-62">
                    <div class="div-63">
                        <div class="column-13">
                            <div class="div-64">
                                <div class="div-65">
                                    <div class="column-14">
                                        <img
                                            loading="lazy"
                                            srcset="/img/advantages_3.png"
                                            class="img-15"
                                        />
                                    </div>
                                    <div class="column-15">
                                        <div class="div-66">
                                            Our simplified onboarding procedure and e-commerce payments
                                            integrations allow businesses to quickly set up and accept
                                            payments
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column-16">
                            <div class="div-67">
                                <div class="div-68">
                                    <div class="column-17">
                                        <img
                                            loading="lazy"
                                            srcset="/img/advantages_4.png"
                                            class="img-16"
                                        />
                                    </div>
                                    <div class="column-18">
                                        <div class="div-69">
                                            Our team consists of the best fintech engineers who have
                                            developed a custom tool that facilitates workflow and
                                            enables clients to earn more profits
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="div-70">
                    <div class="div-71">
                        <div class="column-19">
                            <div class="div-72">
                                <div class="div-73">
                                    <div class="column-20">
                                        <img
                                            loading="lazy"
                                            srcset="/img/advantages_5.png"
                                            class="img-17"
                                        />
                                    </div>
                                    <div class="column-21">
                                        <div class="div-74">
                                            We have universal solutions that can be adapted to any
                                            business of the merchant
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column-22">
                            <div class="div-75">
                                <div class="div-76">
                                    <div class="column-23">
                                        <img
                                            loading="lazy"
                                            srcset="/img/advantages_6.png"
                                            class="img-18"
                                        />
                                    </div>
                                    <div class="column-24">
                                        <div class="div-77">
                                            JetoPay is the leading transparent and secure payment
                                            processor. As a licensed financial institution under
                                            supervisory authority and PCI DSS compliance, we put the
                                            security of our customers' money and data first
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#contactus" id="getitnowbutton"><div class="div-78">Get In Now!</div></a>
            </div>
        </div>
        <div class="div-79">
            <div class="div-80">
                <div class="div-81">
                    <div class="div-82">
                        <div class="column-25">
                            <div class="div-83">
                                <div class="div-84" id="worldwideservices">First Class Worldwide Services</div>
                                <div class="div-85">
                                    Merchants around the world choose our services because of the
                                    versatility of our product, backed by appropriate advanced data
                                    security.
                                </div>
                                <div class="div-86">
                                    The open API architecture provides access to a wide global
                                    network of online, offline and regulated payment methods and
                                    banks in various regions.
                                </div>
                                <div class="div-87">
                                    <div class="div-88">
                                        <div class="column-26">
                                            <div class="div-89">
                                                <div class="div-90">Minimum exchange rates</div>
                                                <div class="div-91">Secured trans-border transactions</div>
                                                <div class="div-92">Protection against fraud</div>
                                                <div class="div-93">Successful transactions in seconds</div>
                                            </div>
                                        </div>
                                        <div class="column-27">
                                            <div class="div-94">
                                                <div class="div-95">Real-time transactions monitoring</div>
                                                <div class="div-96">Strick compliance with applicable regulations</div>
                                                <div class="div-97">Customized analytical reports</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column-28">
                            <img
                                loading="lazy"
                                srcset="/img/globe_img.png"
                                class="img-19"
                            />
                        </div>
                    </div>
                </div>
                <div class="div-98" id="services">Our Services</div>
                <div class="div-99">
                    <div class="div-100">
                        <div class="column-29">
                            <div class="div-101">
                                <img
                                    loading="lazy"
                                    srcset="/img/services_1_img.png"
                                    class="img-20"
                                />
                                <div class="div-102">PAYMENTS SETTLEMENTS AND STATEMENTS</div>
                                <div class="div-103">
                                    We guarantee timely and secure payments credited to the
                                    customers accounts. Additionally, we provide online statement
                                    generation for every transactions record
                                </div>
                            </div>
                        </div>
                        <div class="column-30">
                            <div class="div-104">
                                <img
                                    loading="lazy"
                                    srcset="/img/services_2_img.png"
                                    class="img-21"
                                />
                                <div class="div-105">COMPLIANCE SUPPORT</div>
                                <div class="div-106">
                                    Our compliance team helps merchants comply with laws and
                                    regulations in specific regions/industries
                                </div>
                            </div>
                        </div>
                        <div class="column-31">
                            <div class="div-107">
                                <img
                                    loading="lazy"
                                    srcset="/img/services_3_img.png"
                                    class="img-22"
                                />
                                <div class="div-108">PAYMENTS TRACEABILITY</div>
                                <div class="div-109">
                                    The cutting-edge build-in tool allowing to track payment
                                    processing at all stages of processing
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="div-110">
                    <div class="div-111">
                        <div class="column-32">
                            <div class="div-112">
                                <img
                                    loading="lazy"
                                    srcset="/img/services_4_img.png"
                                    class="img-23"
                                />
                                <div class="div-113">PERSONAL ACCOUNT MANAGER</div>
                                <div class="div-114">
                                    Committed to providing first-class service, we offer a unique
                                    personal account manager for every merchant getting started with
                                    JetoPay payment processing. Feel the difference and start doing
                                    business using our innovative and secure payment solution
                                </div>
                            </div>
                        </div>
                        <div class="column-33">
                            <div class="div-115">
                                <img
                                    loading="lazy"
                                    srcset="/img/services_5_img.png"
                                    class="img-24"
                                />
                                <div class="div-116">SUPPORT OF EXTENSIVE PAYMENT METHODS</div>
                                <div class="div-117">
                                    We support and offer a wide range of payment methods. We mainly
                                    focus on the most common ones, i.e. debit/credit cards, bank
                                    transfers (B2B) and digital wallets such as Apple Pay, Google
                                    Pay, Paypal, Revolut, Payoneer, Alipay, etc.
                                </div>
                            </div>
                        </div>
                        <div class="column-34">
                            <div class="div-118">
                                <img
                                    loading="lazy"
                                    srcset="/img/services_6_img.png"
                                    class="img-25"
                                />
                                <div class="div-119">CUTTING EDGE BANKING SERVICES</div>
                                <div class="div-120">
                                    Eliminate the bureaucracy of traditional banks using all the
                                    advantages of JetoPay, such as personalized interface, payment
                                    links, digital wallets, customized integrated secure payments,
                                    invoicing and billing through POS terminal facility
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="div-181">
            <div class="div-122" id="contactus">Get In Touch With Us</div>
            @include('mail.contactmail')
        </div>
        <div class="div-151">
            <div class="div-152">
                <div class="div-153">
                    <div class="div-154">
                        <div class="column-37">
                            <div class="div-155">
                                <a href="#aboutus"><div class="div-156">About Us</div></a>
                                <a href="#whytochooseus"><div class="div-157">Why To Choose Us?</div></a>
                                <a href="#advantages"><div class="div-158">Advantages</div></a>
                                <a href="#worldwideservices"><div class="div-159">First Class Worldwide Services</div></a>
                                <a href="#services"><div class="div-160">Our Services</div></a>
                                <a href="#contactus"><div class="div-161">Get In Touch With Us</div></a>
                            </div>
                        </div>
                        <div class="column-38">
                            <div class="div-162">
                                <a href="/privacy"><div class="div-163">Privacy Policy</div></a>
                                <a href="/"><div class="div-164">Cookie Policy</div></a>
                                <a href="/"><div class="div-165">PCI DSS Certificate of Compliance</div></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="div-166">
                    <a href=@php config('app.skype_url'); @endphp>
                    <div class="div-167">
                        <img
                            loading="lazy"
                            srcset="/img/skype_logo.png"
                            class="img-28"
                        />
                        <div class="div-168">Skype</div>
                    </div>
                    </a>
                    <a href=@php config('app.facebook_url'); @endphp>
                    <div class="div-169">
                        <img
                            loading="lazy"
                            srcset="/img/facebook_logo.png"
                            class="img-29"
                        />
                        <div class="div-170">Facebook</div>
                    </div>
                    </a>
                    <a href=@php config('app.linkedin_url'); @endphp>
                    <div class="div-171">
                        <img
                            loading="lazy"
                            srcset="/img/linkedin_logo.png"
                            class="img-30"
                        />
                        <div class="div-172">LinkedIn</div>
                    </div>
                    </a>
                    <a href=@php config('app.twitter_url'); @endphp>
                    <div class="div-173">
                        <img
                            loading="lazy"
                            srcset="/img/twitter_logo.png"
                            class="img-31"
                        />
                        <div class="div-174">Twitter</div>
                    </div>
                    </a>
                    <a href=@php config('app.instagram_url'); @endphp>
                    <div class="div-175">
                        <img
                            loading="lazy"
                            srcset="/img/instagram_logo.png"
                            class="img-32"
                        />
                        <div class="div-176">Instagram</div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="div-183">
                <div class="div-177">
                    <img
                        loading="lazy"
                        srcset="/img/visa_logo.png"
                        class="img-33"
                    />
                    <img
                        loading="lazy"
                        srcset="/img/mastercard_logo.png"
                        class="img-34"
                    />
                    <img
                        loading="lazy"
                        srcset="/img/googlepay_logo.png"
                        class="img-35"
                    />
                    <img
                        loading="lazy"
                        srcset="/img/applepay_logo.png"
                        class="img-36"
                    />
                </div>
                <div class="div-182">
                    <img
                        loading="lazy"
                        srcset="/img/mbway_logo.png"
                        class="img-37"
                    />
                    <img
                        loading="lazy"
                        srcset="/img/paypal_logo.png"
                        class="img-38"
                    />
                    <img
                        loading="lazy"
                        srcset="/img/pci_logo.svg"
                        class="img-39"
                    />
                </div>
            </div>
            <div class="div-178">
                JetoPay is registered in Canada under the registration number: BC1421568,
                address: 422 Richards Street, Suite 170, Vancouver, British Columbia, V6B
                2Z4, Canada, and authorised by the FINTRACT under the registration number:
                M23328180
            </div>
            <div class="div-179">
                <img
                    loading="lazy"
                    srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/1437405f-a6dd-4cb2-8327-15ed2957f5c1?"
                    class="img-40"
                />
                <div class="div-180">© @php echo date("Y") @endphp All rights reserved</div>
            </div>
        </div>
    </div>
@endsection
