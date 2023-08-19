<div id="termynal" data-termynal data-termynal data-ty-typeDelay="40" data-ty-lineDelay="700" style="direction: ltr">
    <span data-ty="input">pip install stackteam --taas</span>
    <span data-ty="progress"></span>
    <span data-ty>Successfully installed stackteam</span>
    <span data-ty></span>
    <span data-ty="input">stackteam create team --python</span>
    <span data-ty="progress"></span>
    <span data-ty>Successfully created your team</span>
    <span data-ty></span>
    <span data-ty="input">python</span>
    <span data-ty="input" data-ty-prompt=">>>">import taas</span>
    <span data-ty="input" data-ty-prompt=">>>">myProject = taas.dev('idea')</span>
    <span data-ty="input" data-ty-prompt=">>>">myProject.deploy()</span>
    <span data-ty="input" data-ty-prompt=">>>">myProject.continuousDevelopment()</span>
</div>


@push('scripts')
<x-script link="js/vendor/termynal.js" data-termynal-container="#{{ $holder }}" />    
@endpush

@push('styles')
<x-style link="css/vendor/termynal.css" />
@endpush

