context('Unifacs', () => {

    it('Acessar login da Submarino Viahens' , () => {
        
        cy.visit('https://www.submarinoviagens.com.br/');
        cy.get('.origem > .cidade').click();
        cy.get('#pesqinc').type("Salvador");
        cy.get('#item-cidade').click();

    });

});