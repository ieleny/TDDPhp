context('Unifacs', () => {

    it('Acessar login da uNIFACS' , () => {
        cy.visit('https://portal.unifacs.br/matriculaweb/portaldoestudante/default.asp');

        cy.get('#loginPessoa').type('730180003');

        cy.get('[type="submit"]').click();

        cy.get(':nth-child(3) > #menuPai > .collapsed').click();
    });

});