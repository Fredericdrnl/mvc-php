CREATE DATABASE rating WITH OWNER ...;

\c rating

CREATE TABLE rating(id SERIAL, 
                    departement varchar,
                    promo varchar,
                    module varchar,
                    note integer CHECK (note BETWEEN 0 AND 5),
                    commentaire varchar,
                    etudiant varchar,
                    datecomm date DEFAULT current_date
                    );
                    
ALTER TABLE rating RENAME TO avis;

DELETE FROM avis WHERE id = 2;

INSERT INTO avis(departement, promo, module, note, commentaire, etudiant) 
VALUES ('INFO', 'BUT2', 'PHP', 5, 'C TRO BIEN LE PHP', 'DOURNEL Frédéric');

INSERT INTO avis(departement, promo, module, note, commentaire, etudiant) 
VALUES ('GEA', 'BUT2', 'Finance', 1, 'Pas ouf', 'FOURNIER Benjamin');

INSERT INTO avis(departement, promo, module, note, commentaire, etudiant) 
VALUES ('INFO', 'BUT2', 'Mathématiques', 1.5, 'Je ne comprends rien ', 'ELUECQUE Anthony');

INSERT INTO avis(departement, promo, module, note, commentaire, etudiant) 
VALUES ('INFO', 'BUT2', 'PHP', 5, 'C est incroyable', 'WATEL Noa');

INSERT INTO avis(departement, promo, module, note, commentaire, etudiant) 
VALUES ('INFO', 'BUT1', 'C++', 3, 'Pas seraint', 'DOURNEL Frédéric');

INSERT INTO avis(departement, promo, module, note, commentaire, etudiant) 
VALUES ('INFO', 'BUT2', 'DROIT', 5, 'Grâce à ce cours je me suis réorienté', 'Unknow');

INSERT INTO avis(departement, promo, module, note, commentaire, etudiant) 
VALUES ('INFO ', 'BUT3', 'elexir', 5, 'Je viens du futur et cette matière est incroyable', 'Homme du FUTUR');

INSERT INTO avis(departement, promo, module, note, commentaire, etudiant) 
VALUES ('INFO ', 'BUT3', 'elexir', 2, 'azfzafazfa', 'TAZ');

INSERT INTO avis(departement, promo, module, note, commentaire, etudiant) 
VALUES ('INFO ', 'BUT3', 'elexir', 4, 'ZZZ', 'Homme qui dort');

