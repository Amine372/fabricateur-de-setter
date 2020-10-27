import os
import random
import string
import shutil
continuer = "oui"
variables =[]
while(continuer=="oui"):
    gh= str(input("Citer les variables pour la fabrication model"))
    variables.append(gh)
    continuer = str(input("Continuer oui/non"))
