from random import randint
from time import monotonic

def main():
    '''
    Fonction principale
    Changement de mode de jeu
    Lancement du jeu et modification des règles
    '''
    running, help = True, False
    first, last = 1, 100
    mode = ''

    # Changement de mode de jeu
    while mode == '':
        mode = input('\nSelectionne le mode de jeu:\n1. Classique\n2. Contre la montre\n')
        match mode:
            case '1':
                playing = 7
            case '2':
                playing = 20
            case _:
                mode = ''
                print('Entre un nombre entier entre 1 et 2 !')

    if ask('\nSouhaites modifier les paramètres du jeu ?'):
        # Changement nombre d'essai / temps imparti
        if mode == '1':
            msg = 'nombre d\'essais'
        else:
            msg = 'temps imparti'

        playing = ask(f'\nSouhaites tu modifier le {msg} ?\nNombre par défaut: {playing}', playing)
        while playing < 1:
            print('Le nombre doit être supérieur ou égal à 1 !')
            try:
                playing = int(input('\nSaisis la nouvelle valeur: '))
            except ValueError:
                print('Tu dois entrer un nombre entier !')

        # Changement des autres règles
        help = ask('\nSouhaites tu de l\'aide (intervalle précisemment indiqué) ?')
        first = ask(f'\nSouhaites tu modifier le début de l\'intervalle dans lequel jouer ?\nNombre par défaut: {first}', first)
        last = ask(f'\nSouhaites tu modifier la fin de l\'intervalle dans lequel jouer ?\nNombre par défaut: {last}', last)
        if first > last:
            last, first = first, last
            print('\nNous avons inversé le début et la fin de l\'intarvalle car la fin était inférieure au début.')

    # Boucle du jeu
    while running:
        plusMoins(playing, first, last, mode, help)
        running = ask('Souhaites tu rejouer (les paramètres seront les mêmes) ?')


def ask(Q:str, number=False):
    '''
    Fonction pose une question fermée (oui/non)
    Possibilité de demander un nombre à l'utilisateur
    '''
    print(Q + '\nÉcris "Oui" pour accepter, autre chose sinon:')
    if input().lower() == "oui":
        # Si on demande à l'utilisateur d'entrer un nombre
        if number is not False:
            number = ''
            while not isinstance(number, int):
                try:
                    number = int(input('\nÉcris la nouvelle valeur: '))
                except ValueError:
                    print('Tu dois entrer un nombre entier !')
            return number # Nombre
        return True # Oui
    return number # Non


def plusMoins(playing=7, first=1, last=100, mode='1', help=False):
    if mode == '2': tVar = monotonic()
    # Coix nombre aléatoire
    num = randint(first, last)
    min, max = first, last
    print(f'\nUn nombre entre {first} et {last} à été choisi !')

    # Boucle bornée au max d'essais
    while playing > 0:
        guess = ''

        # Tant que l'utilisateur n'a pas fait d'entrée correcte
        while not isinstance(guess, int):
            try:
                if help is False:
                    guess = int(input('\nEntre un nombre :\n'))
                else:
                    guess = int(input(f'\nEntre un nombre entre {min} et {max} : \n'))

                if help is False:
                    if guess not in range(first, last+1):
                        print(f'Le nombre entré n\'est pas entre {first} et {last} !')
                        guess = ''
                else:
                    if guess not in range(min, max+1):
                        print(f'Le nombre entré n\'est pas entre {min} et {max} !')
                        guess = ''
            except ValueError:
                print('Tu dois entrer un nombre !')

        # Comparaisons
        if guess < num:
            print('\nC\'est plus !')
            min = guess + 1
        elif guess > num:
            print('\nC\'est moins !')
            max = guess - 1
        else:
            break

        # Décompte des essais / du temps
        if mode == '1':
            playing -= 1
        else:
            playing -= monotonic() - tVar
            tVar = monotonic()

    # Message de fin
    if guess == num:
        print(f'\nBravo, tu as trouvé le bon nombre !')
    else:
        print('\nDommage, tu n\'as pas pu trouver le bon nombre assez vite...')


if __name__ == '__main__':
    main()
