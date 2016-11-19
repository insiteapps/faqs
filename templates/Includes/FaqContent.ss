<% if $Children %>
    <section id="FaqContainer">
        <div class="panel-group" id="FaqContainerAccordion" role="tablist" aria-multiselectable="true">
            <% loop $Children %>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading-{$ID}">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#FaqContainerAccordion"
                               href="#collapse-{$ID}" aria-expanded="true" aria-controls="collapse{$ID}">
                                {$Title}
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-{$ID}" class="panel-collapse collapse " role="tabpanel">
                        <div class="panel-body">
                            {$Content}
                        </div>
                    </div>
                </div>
            <% end_loop %>
        </div>
    </section>
<% end_if %>
