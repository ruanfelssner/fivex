<footer class="bg-black text-white">
    
    <section class="bottomFooter bg-[rgba(255,255,255,0.1)] py-16">
        <AtomsContainer>
            <AtomsRow :colsDesktop="4">
                <div>
                    <router-link to="/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgsimgs/logo.webp" alt="5 FIVEX Store" class="mb-3" />
                    </router-link>
                </div>
                <div>
                    <h1 class="mb-3">Institucional</h1>
                    <ul>
                        <li><a href="#">Sobre nós</a></li>
                        <li><a href="#">Política de privacidade</a></li>
                        <li><a href="#">Política de troca e devolução</a></li>
                        <li><a href="#">Termos de uso</a></li>
                    </ul>
                </div>
                <div>
                    <h1 class="mb-3">Ajuda</h1>
                    <ul>
                        <li><a href="#">Fale conosco</a></li>
                        <li><a href="#">Perguntas frequentes</a></li>
                        <li><a href="#">Como comprar</a></li>
                        <li><a href="#">Formas de pagamento</a></li>
                    </ul>
                </div>
                <div>
                    <h1 class="mb-3">Central de Relacionamento</h1>
                    <h3 class="mb-2"><a href="tel:4133333333">(41) 3333-3333</a></h3>
                    <p>(Ligações de qualquer origem <br />Cobrança de Acordo com Operadora)</p>
                </div>
            </AtomsRow>            
        </AtomsContainer>
    </section>
    <section class="topFooter py-10">
        <AtomsContainer>
        <AtomsRow :colsDesktop="2" class="text-center">
            <div>
                <h1 class="mb-3">Formas de pagamento</h1>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgsimgs/payments.png" class="my-3 mx-auto" alt="Formas de pagamento" />
                <p>Parcele suas compras usando seu cartão de crédito e pague em até 10x sem juros</p>
            </div>
            <AtomsRow :colsDesktop="2" :colsMobile="2" class="mb-4">
                <div>
                    <h1 class="mb-3">Segurança</h1>
                </div>
                <div>
                    <h1 class="mb-3">Redes Sociais</h1>
                    <AtomsButton icon="facebook-f" size="lg" prefix="fab" />
                    <AtomsButton class="mx-2" icon="instagram" size="lg" prefix="fab" />
                    <AtomsButton icon="youtube" size="lg" prefix="fab" />
                </div>
            </AtomsRow>
        </AtomsRow>          
    </AtomsContainer>
    </section>
    <section class="bottomFooter bg-[rgba(255,255,255,0.1)] py-6">
        <AtomsContainer>
            <AtomsRow class="text-center">
                <p>Todos direitos reservados a <strong>5 FIVEX Store</strong> - Pneu de Qualidade <strong>19.836.669/0001-46</strong></p>
            </AtomsRow>            
        </AtomsContainer>
    </section>
</footer>
<?php wp_footer(); ?>