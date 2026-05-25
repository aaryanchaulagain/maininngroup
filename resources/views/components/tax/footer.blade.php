<footer class="border-t border-tax-border bg-tax-bg section-pad">
    <div class="container-wide grid gap-10 sm:grid-cols-2 lg:grid-cols-4">
        <div>
            <p class="font-bold text-tax-navy">INN Group Tax</p>
            <p class="mt-3 text-sm text-gray-600">Accounting, taxation, and advisory for growth-focused clients.</p>
        </div>
        <div>
            <p class="text-sm font-semibold text-tax-navy">Services</p>
            <ul class="mt-3 space-y-2 text-sm text-gray-600">
                <li><a href="{{ route('tax.services.accounting') }}" class="hover:text-tax-blue">Accounting & Taxation</a></li>
                <li><a href="{{ route('tax.services.advisory') }}" class="hover:text-tax-blue">Business Advisory</a></li>
                <li><a href="{{ route('tax.services.bas-gst') }}" class="hover:text-tax-blue">BAS / GST</a></li>
                <li><a href="{{ route('tax.services.smsf') }}" class="hover:text-tax-blue">SMSF</a></li>
                <li><a href="{{ route('tax.services.compliance') }}" class="hover:text-tax-blue">Compliance</a></li>
            </ul>
        </div>
        <div>
            <p class="text-sm font-semibold text-tax-navy">Company</p>
            <ul class="mt-3 space-y-2 text-sm text-gray-600">
                <li><a href="{{ route('tax.aboutus') }}" class="hover:text-tax-blue">About Us</a></li>
                <li><a href="{{ route('tax.about.team') }}" class="hover:text-tax-blue">Meet Team</a></li>
                <li><a href="{{ route('tax.about.disclaimer') }}" class="hover:text-tax-blue">Disclaimer</a></li>
            </ul>
        </div>
        <div>
            <p class="text-sm font-semibold text-tax-navy">Contact</p>
            <p class="mt-3 text-sm text-gray-600">tax@inngroup.com.au</p>
        </div>
    </div>
    <p class="container-wide mt-10 border-t border-gray-100 pt-6 text-center text-xs text-gray-400">&copy; {{ date('Y') }} INN Group Tax</p>
</footer>
