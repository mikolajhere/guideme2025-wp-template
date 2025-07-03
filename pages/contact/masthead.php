<section class="mx-auto max-w-4xl px-4 py-20 md:py-24">
    <p
        class="mb-3 text-center text-xs font-semibold text-[var(--guide-me-lime)] uppercase lg:pt-20">
        Contact Us
    </p>
    <h1
        class="font-lighter mt-2 mb-4 px-4 text-center text-4xl text-pretty text-[#252726] md:mb-12 md:px-0 md:text-6xl lg:mb-24">
        Get in Touch with GuideMe
    </h1>
    <div class="space-y-12 divide-y divide-gray-200">
        <!-- Contact Information Section -->
        <div class="flex flex-col items-start gap-8 pb-8 lg:flex-row">
            <div class="flex-1">
                <h2 class="mb-4 text-2xl font-bold text-gray-900">
                    Reach Out to Us
                </h2>
                <div class="space-y-6">
                    <div>
                        <h3 class="mb-2 text-lg font-semibold text-gray-900">Email</h3>
                        <p class="text-gray-700">
                            For general inquiries, please email us at:
                            <a href="mailto:lszajda94@gmail.com" class="text-[var(--guide-me-lime)] hover:underline">lszajda94@gmail.com</a>
                        </p>
                    </div>
                    <div>
                        <h3 class="mb-2 text-lg font-semibold text-gray-900">Phone</h3>
                        <p class="text-gray-700">
                            You can call us during business hours at:
                            <a href="tel:+48322585580" class="text-[var(--guide-me-lime)] hover:underline">+48 32 258 55 80</a>
                        </p>
                    </div>
                    <div>
                        <h3 class="mb-2 text-lg font-semibold text-gray-900">Address</h3>
                        <p class="text-gray-700">
                            GuideMe<br>
                            Wrzesińska 10/3<br>
                            02-787, Warsaw
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form Section (Optional) -->
        <div class="flex flex-col items-start gap-8 pb-8 lg:flex-row">
            <div class="flex-1">
                <!-- <h2 class="mb-4 text-2xl font-bold text-gray-900">Send us a Message</h2>
                <form class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[var(--guide-me-lime)] focus:ring-[var(--guide-me-lime)] sm:text-sm"
                            placeholder="John Doe" />
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[var(--guide-me-lime)] focus:ring-[var(--guide-me-lime)] sm:text-sm"
                            placeholder="you@example.com" />
                    </div>
                    <div>
                        <label
                            for="message"
                            class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea
                            id="message"
                            name="message"
                            rows="4"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[var(--guide-me-lime)] focus:ring-[var(--guide-me-lime)] sm:text-sm"
                            placeholder="Type your message here..."></textarea>
                    </div>
                    <div>
                        <button
                            type="submit"
                            class="inline-flex justify-center rounded-md border border-transparent bg-[var(--guide-me-lime)] px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                            Send Message
                        </button>
                    </div>
                </form> -->
                <div class="[&_>.wpforms-field-*]:!rounded-md [&_>.wpforms-field-*]:!border-gray-300  [&_>.wpforms-field-*]:!px-4 [&_[type=submit]]:!bg-[var(--guide-me-lime)] [&_[type=submit]]:!focus:ring-[var(--guide-me-lime)] [&_[type=submit]]:!hover:bg-green-700 [&_[type=submit]]:!text-white [&_[type=submit]]:!shadow-sm [&_[type=submit]]:!focus:ring-offset-2">
                    <?php
                    if (function_exists('wpforms_display')) {
                        wpforms_display(51); // Replace 123 with your actual form ID
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>