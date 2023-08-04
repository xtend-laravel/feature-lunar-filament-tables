<div>
    {{ $this->table }}

    <div class="ui-slideover-forms">
        @each('adminhub::partials.ui.slideover-wizard', $this->slideoverForms ?? [], 'slideoverForm')
    </div>

    <div class="ui-modal-forms">
        @each('adminhub::partials.ui.modal', $this->modalForms ?? [], 'modalForm')
    </div>
</div>
