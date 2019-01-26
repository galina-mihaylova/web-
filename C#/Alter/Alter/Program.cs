using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Alter
{
    class Program
    {
        static void Main(string[] args)
        {
            int alter = 15;
            Console.WriteLine("Wie alt bist du? (15-19)");
            string eingabe = Console.ReadLine();

            alter = Convert.ToInt32(eingabe);

            if (alter < 16)
            {
                Console.WriteLine("Kein Alkohol für dich!");
            }
            else if (alter == 16)
            {
                Console.WriteLine("Nur Bier und Wein mein Freund!");
            }
            else if (alter == 17)
            {
                Console.WriteLine("Ein Jahr bis zum harten Alk!");
            }
            else
            {
                Console.WriteLine("Mach doch was du willst!");
            }
            Console.ReadLine();

        }
    }
}
