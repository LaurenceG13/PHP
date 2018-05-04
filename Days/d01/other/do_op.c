/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   main.c                                             :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: lagirard <marvin@42.fr>                    +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2016/09/21 18:09:38 by lagirard          #+#    #+#             */
/*   Updated: 2016/09/21 18:52:04 by lagirard         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

#include "header.h"

int		ft_do_op(char *s1, char *s2, char *s3)
{
	int		a;
	int		b;
	int		nb;

	a = atoi(s1);
	b = atoi(s3);
	if (s2[0] == '+')
		nb = a + b;
	if (s2[0] == '-')
		nb = a - b;
	if (s2[0] == '*')
		nb = a * b;
	if (s2[0] == '/')
		nb = a / b;
	if (s2[0] == '%')
		nb = a % b;
	return (nb);
}

int		main(int argc, char **argv)
{
	int		n;

	if (argc != 4)
	{
		printf("%c", '\n');
		return (0);
	}
	n = ft_do_op(argv[1], argv[2], argv[3]);
	printf("%i", n);
	printf("%c", '\n');
	return (0);
}
