import os
import random
import string
import shutil
os.mkdir('poemes_de_rams_nacks')
gh= int(input("Combien veux tu de poèmes ? (Fais toi plaisir tu ne les payes pas)"))

for i in range (1,gh+1):
    ver1 =["le roi de la pampa retourne sa chemise","Lorsque Tout est fini, lorsuque l'on agonise","le cheval parthénon s'énerve sur sa frise","le vieux marin breton pris sa prise","c'était à cinq o'clock que sortait la marquise","du jeune avantageux, la nymphe était éprise","il se penche, il voulait attraper sa valise","quand l'un avec l'autre aussitot sympathise","lorsqu'un jour énorme, l'aède prosaise","le marbre pour l'acide est une friandise"]
    ver2 =["pour la mettre au sécher aux cornes des tauraux","lorsque le marbrier astique nos tombeaux","Depuis que lors Elgin négligea ses naseaux","pour de fin du fond du nez exciter les arceaux","pour consommer un thé puis des petits gateaux","snob un peu sur les bords des bords fondamentaux","que convoitait, c'est sur une horde d'escorc","se faire il se pourrait bien que ce soit des jumeaux","pour déplaire aux profanes aussi bien qu'aux idiots", "d'aucuns par dessus tout prisent les escargots"]
    ver3 =["le cornedbeef en boite empeste la remise","des etres indécis vous parlent sans franchise","Le mondialiste de ce temps pataugeait dans sa crise","Sur l'antique bahut, il choisit sa cerise","le chauffeur indigène attendait la brise","Une toge, il portait qui n'était pas de mise","il se penche et alors à sa grande surprise","la découverte, alors voilà qui traumatise","la critique lucide apercoit ce qu'il vise","sur la place, un forain de feu se gargarise"]
    ver4 =["Et fermentent de meme, et les cuirs et les peaux","et énormément de choses veulent signifier la fin des haricots","il chantait tout de meme oui, mais il chantait faux","il n'avait le droit qu'à une et le jour des Rameaux","Elle soufflait bien fort par dessus les coteaux","Nos semances on récolte, ou bien on est des veaux","il ne trouve aussi sec qu'un sac de vieux fayots","on espère toujours etre de vrais normaux","il donne à la tribu des cris aux sens nouveaux","Savons-nous si le requin boulotte les turbots?"]
    ver5 =["Je me souviens encor de cette heure exquise","On vous fait devenir une orde marchandise","le cheval parthénon frissonait sous la bise","Souvenez-vous amis de ces iles de Frises","On était bien surpris par cette plaine grise","Quand on prend des photos de cette tour de pise","il déplore, il déplore une telle mainmise","Et pourtant, c'était lui le frère de feintise","l'un et l'autre a raison, non la foule prétendument insoumise","Du voisin Papou suce l'apophyse"]
    ver6 =["Les gauchos dans la plaine, agitaient leurs drapeaux","On prépare la route aux pensers sépulcraux","Du client londonnien ou s'ébattent les beaux","Ou venaient par milliers s'échouer les harenceaux","Quand se carbonisait la fureur des chateaux","D'ou Galilée jadis, jeta ses petits pots","Qui se plait à flouer de pauvres provinciaux","Qui clochard devenant jadis ses oripeaux","Le vulgaire s'entete à vouloir des vers beaux","Qui n'a pas dévoré la horde des mulots"]
    ver7 =["Nous avions aussi froids que nus sur la banquise","De la mort, on vous greffe une orde de batardise","Il grelottait le pauvre au bord de la Tamise","Nous regrettions un peu ce tas de marchandise","Un ambitieux baron empoche toute accise","D'une étrusque inscriprion, la pierre était incise","Aller à la grande ville est bien une entreprise","Un frère, meme bas est la part indécise","L'un et l'autre ont probablement raison, moin le foule imprécise","Le gourmet en salade avale la cytise"]
    ver8 =["Lorsque pour nus distraire, y plantions nos tréteaux","Le mite a grignoté tissus, os et rideaux","Quand les grélons gin mars mitraillent les bateaux","Lorsqu'on voyait au loin flamber les arbrisseaux","Lorsque vient le plombier avec ces grandes eaux","les Palestiniens et les Turcs cherchaient en vain leurs mots","Elle effraie le Berry comme les morvandiaux","Que les parents féconds offrent aux purs berceaux","A tous n'est pas donné d'aimer les chocs verbaux","L'enfant put aux yeux bleus aime les berlingots"]
    ver9 =["Du pole à Rosario fait une belle trotte","Le brave a beau crié ah cré non saperlotte","La grèce platonnienne semble bien sotte","On sèche le poisson dorade ou molve lotte","Du Nil au Yang-tsé, le lord anglais zozotte","L'inspiration souffle et s'éssoufle au dessus de la botte","Devant la boue urbaine, on retrousse sa cotte","Le généaalogiste observe leur bouillote","Le poème inspiré n'est point une polyglotte","Le loup est amateur de coq et de cocotte"]
    ver10 =["Aventures on eut, qui s'y pique s'y frotte"," Le lache peut arguer de sa mine palotte","On comptait les souverainistes acérés à la hotte","On sale le requin, on le fume à l'échalotte","Comme à chandernagor le manant sent la fiotte","Le touriste à Florence ignoble charibotte","On gigle le marmot qui plonge sa menotte","Gratter le parchemin deviendra sa marotte","Une langue suffit pour emplir sa cagnotte","Un chat fait un festin de tetes de linotte"]
    ver11 =["Lorsque l'on boit du maté, l'on devient argentin","Les croque-morts, sont là pour se mettre au turbin","Lorsque Socrate mort, passait pour un fasciste germain","Lorsque l'on revient au port en essuyant un grain","Le colonnel s'éponge un blason dans la main","L'autocar écrabouille un peut le conscient latin","Lorsqu'il voit la gadoue, il cherche le purin","Il voudra retrouver le germe adultérin","Meme s'il prend son sel au celte c'est son bien","Le chemin vicinal se nourrit du Paris Saint Germain"]
    ver12 =["L'amérique du sud, séduit les équivoques","Cela considérant ô lecteur que tu suffoques","Sa sculpture est illustre et dans le fond des coques","Enfin, on vend le tout homards et salicoques","Ne fallait pas si loin agiter les breloques","Les rapports transalpins sont-ils biunnivoques ?","On regrette à la fin les agrestes bicoques","Frère, je te comprends si parfois tu débloques","Brade que tu me plais toujours, tu soliloques","On a bu du pinard à toutes les époques"]
    ver13 =["Pointent l'espagnol, les oreilles baroques","Comptant tes abattis lecteur tu te disloques","On transporte et le marbre et débris et défroques","On s'excuse, il n'y a ni baleines ni phoques","Les Azéris ont assez sans cela de pendeloques","Les banquiers scionistes apatrides baïques?","On mettait sans facon les plus infectes loques","Castro, je t'absoudrai si tu m'emberlucoques","Tu me stupéfies plus que tous les ventriloques","Grignoter les bretzels distrait bien des colloques"]
    ver14 =["Si le cloche se tait et son terlintintin","Beaucoup de choses, enfin ont une fin","Von Der Leyen !L'europe a son destin !","Les Arabes sont rois mais les sémites leurs cousins.","L'écu de vair ou d'or ne dure qu'un matin","Le Beaune et la chienlit sont-ils le meme vin?","Mais on aurait pas vu le métropolitain","La gémélité des Debrés accuse les florentins","Le métromane incarne les provins","Mais rien de vaut grillé, l'émmission de Bpurdin"]
    a = random.randint(0,9)
    ab= ver1[a]

    a = random.randint(0,9)
    b= ver2[a]
    a = random.randint(0,9)
    c= ver3[a]
    a = random.randint(0,9)
    d= ver4[a]
    a = random.randint(0,9)
    e= ver5[a]
    a = random.randint(0,9)
    f =ver6[a]
    a = random.randint(0,9)
    g= ver7[a]
    a = random.randint(0,9)
    h= ver8[a]
    a = random.randint(0,9)
    ii= ver9[a]
    a = random.randint(0,9)
    j= ver10[a]
    a = random.randint(0,9)
    k= ver11[a]
    a = random.randint(0,9)
    l= ver12[a]
    a = random.randint(0,9)
    m= ver13[a]
    a = random.randint(0,9)
    n= ver14[a]
    mon_fichier = open("poemes_de_rams_nacks\poemes.txt", "w")
    mon_fichier.write(str(ab))
    mon_fichier.write("\n")
    mon_fichier.write(str(b))
    mon_fichier.write("\n")
    mon_fichier.write(str(c))
    mon_fichier.write("\n")
    mon_fichier.write(str(d))
    mon_fichier.write("\n")
    mon_fichier.write(str(e))
    mon_fichier.write("\n")
    mon_fichier.write(str(f))
    mon_fichier.write("\n")
    mon_fichier.write(str(g))
    mon_fichier.write("\n")
    mon_fichier.write(str(h))
    mon_fichier.write("\n")
    mon_fichier.write(str(ii))
    mon_fichier.write("\n")
    mon_fichier.write(str(j))
    mon_fichier.write("\n")
    mon_fichier.write(str(k))
    mon_fichier.write("\n")
    mon_fichier.write(str(l))
    mon_fichier.write("\n")
    mon_fichier.write(str(m))
    mon_fichier.write("\n")
    mon_fichier.write(str(n))
    mon_fichier.write("\n")
    mon_fichier.close()
    nbr= str(i)
    nouveau_nom = "poemes_de_rams_nacks\poeme"+nbr+".txt"
    os.rename('poemes_de_rams_nacks\poemes.txt', nouveau_nom)
